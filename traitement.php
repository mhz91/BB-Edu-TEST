<?php
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

require_once "questions.php";
$questions = getQuestions();

echo "<pre>";
print_r($_POST);
echo "</pre>";
//die;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = new PHPMailer(true);

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
//    $mail->Host = 'smtp.gmail.com';
// use
 $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

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
    $mail->addAddress('contact@marionhouze.com');
    $mail->addAddress('houze.m@gmail.com');

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
          $contenu .= '<li>' . $questionReponse["label"] . '</li>';
        }
      }
    }
    $contenu .= '</ul>';
  
    $contenu .= '</p>';
  
    $numQuestion++;
  }

  $contenu .= '</p>';

  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

    $mail->Body = $contenu;

    $mail->isHTML(true);

  // Envoyer l'email
    $mail->send();
}

// mail('contact@marionhouze.com', $contenu, $objet);

/*
echo 'Nom : '.$_POST["nom"].'<br>';
echo 'Prénom : ' .$_POST["prenom"].'<br>';
echo 'Société : ' .$_POST["society"].'<br>';
echo 'E-mail : ' .$_POST["mail"].'<br>';
echo 'Téléphone : ' .$_POST["phone"].'<br>';
echo $note;
*/

die;
if ($note <= 2) {
  header("Location:looser.php?note=$note");
} elseif ($note >= 3 OR $note <= 4) {
  header("Location:averagejo.php?note=$note");
} elseif ($note >= 5 OR $note <= 6) {
  header("Location:congrats.php?note=$note");
} elseif ($note == 7) {
  header("Location:yourtheman.php?note=$note");
}