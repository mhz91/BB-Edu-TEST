<?php
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/.env');

require_once "questions.php";
$questions = getQuestions();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = new PHPMailer(true);

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = $_ENV["SMTP_USERNAME"];


//Password to use for SMTP authentication
    $mail->Password = $_ENV["SMTP_PASSWORD"];

    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('houze.m@gmail.com');
    $mail->addAddress('contact@marionhouze.com');

    $mail->Subject = 'REPONSES EDU TEST';
  
  $nom = htmlentities($_POST['nom']); // required
  $prenom = htmlentities($_POST['prenom']); // required
  $society = htmlentities($_POST['society']); // required
  $phone = htmlentities($_POST['phone']); // not required
  $email = htmlentities($_POST['mail']); // required
  
  // Variables concernant l'email
  $contenu = '<h1> REPONSE EDU TEST </h1>';
  $contenu .= '<p><strong>NOM</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>PRÉNOM</strong>: '.$prenom.'</p>';
  $contenu .= '<p><strong>SOCIETE</strong>: '.$society.'</p>';
  $contenu .= '<p><strong>TELEPHONE</strong>: '.$phone.'</p>';
  $contenu .= '<p><strong>EMAIL</strong>: '.$email.'</p>';
  
  $contenu .= '<p><strong>REPONSES</strong>:';

  $numQuestion = 1;
  $note = 0;
  while (isset($_POST["reponses-$numQuestion"])) {
    $reponses = $_POST["reponses-$numQuestion"];
    $question = $questions[$numQuestion - 1];
  
    if ($reponses == $question["correctes"]) {
      $note++;
    }

    $contenu .= '<h2>' . $question["titre"] . '</h2>';
    $contenu .= '<ul>';
    foreach ($reponses as $reponse) {
      foreach ($question["reponses"] as $questionReponse) {
        if ($questionReponse["value"] === $reponse) {
          $color = in_array($questionReponse["value"], $question["correctes"]) ? "green" : "red";
          $contenu .= '<li style="color: ' . $color . ';">' . $questionReponse["label"] . '</li>';
        }
      }
    }
    $contenu .= '</ul>';

    // Vérifier si l'internaute s'est trompé
    if ($reponses != $question["correctes"]) {
      $contenu .= "<p>Il fallait sélectionner :</p>";
      $contenu .= '<ul>';
      // Boucle sur les réponses qu'il aurait du sélectionner
      foreach ($question["correctes"] as $correcte) {
        // Rechercher dans le tableau des réponses la réponse complète à partir de la value
        $index = array_search($correcte, array_column($question["reponses"], "value"));
        $contenu .= '<li>' . $question["reponses"][$index]["label"] . '</li>';
      }
      $contenu .= '</ul>';
    }
  
    $contenu .= '</p>';
  
    $numQuestion++;
  }
  $contenu .= '<h2>La note est de '.$note.' sur 21.</h2>';
  $contenu .= '</p>';

  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

    $mail->Body = $contenu;

    $mail->isHTML(true);

  // Envoyer l'email
    $mail->send();
}

var_dump($note);
if ($note <= 8) {
  header("Location:loser.php?note=$note");
} elseif ($note >= 9 OR $note <= 15) {
  header("Location:averagejo.php?note=$note");
} elseif ($note >= 16 OR $note <= 20) {
  header("Location:congrats.php?note=$note");
} elseif ($note == 21) {
  header("Location:yourtheman.php?note=$note");
}