<?php
require_once "questions.php";
$questions = getQuestions();

echo "<pre>";
print_r($_POST);
echo "</pre>";
//die;

$numQuestion = 1;
$note = 0;
while (isset($_POST["reponses-$numQuestion"])) {
  $reponses = $_POST["reponses-$numQuestion"];
  $question = $questions[$numQuestion - 1];

  if ($reponses == $question["correctes"]) {
    $note++;
  }

  // Ajouter dans la variable message ($message .= "en plus";)

  $numQuestion++;
}

if ($note <= 2) {
header("Location:looser.php?note=$note");
}

elseif ($note >= 3 OR $note <= 4) {
header("Location:averagejo.php?note=$note");
}

elseif ($note >= 5 OR $note <= 6) {
header("Location:congrats.php?note=$note");
}

elseif ($note == 7) {
header("Location:yourtheman.php?note=$note");
}

//$reponses = $questions->get_contents();
//foreach($reponses as $reponse) {
//$allreponses  = "Réponses aux questions : ".$reponse['value'] ."\n";
//}


if ($_SERVER['REQUEST_METHOD']=='POST') {

  //$to  = 'contact@marionhouze.com, houze.m@gmail.com';
  $to  = 'contact@marionhouze.com' . ', '; // note the comma
  $to .= 'houze.m@gmail.com';
  
  $subject = 'REPONSES EDU TEST';
  
  $nom = htmlentities($_POST['nom']); // required
  $prenom = htmlentities($_POST['prenom']); // required
  $society = htmlentities($_POST['society']); // required
  $phone = htmlentities($_POST['phone']); // not required
  $mail = htmlentities($_POST['mail']); // required
  
if(empty($question["reponses"])){
echo 'Le champ est vide !';
}
  
else {
  
// Variables concernant l'email
  $contenu = '<html><head><title> REPONSE EDU TEST </title></head><body>';
  $contenu .= '<p><strong>NOM</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>PRENOM</strong>: '.$prenom.'</p>';
  $contenu .= '<p><strong>SOCIETE</strong>: '.$society.'</p>';
  $contenu .= '<p><strong>TELEPHONE</strong>: '.$phone.'</p>';
  $contenu .= '<p><strong>EMAIL</strong>: '.$mail.'</p>';
//$contenu .= '<p><strong>REPONSES</strong>: '.$allreponses.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
  
// Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';
  
// Envoyer l'email
mail($to, $subject, $contenu, implode("\r\n", $headers));
  
}}

// mail('contact@marionhouze.com', $contenu, $objet);

echo 'Nom : '.$_POST["nom"].'<br>';
echo 'Prénom : ' .$_POST["prenom"].'<br>';
echo 'Société : ' .$_POST["society"].'<br>';
echo 'E-mail : ' .$_POST["mail"].'<br>';
echo 'Téléphone : ' .$_POST["phone"].'<br>';
echo $note;

if (isset($_POST['question1']))
 {
  $question1=htmlentities($_POST['question1']);
  $note=0;

  if ($question1==12)
   {
     $note=$note+1;
     echo 'Corect';
   }
   else
   {
    echo 'Faux';
   }}

if (isset($_POST['question2']))
 {
  $question2=htmlentities($_POST['question2']);
  $note=0;

  if ($question2==48)
   {
     $note=$note+1;
     echo 'Corect';
   }
   else
   {
    echo 'Faux';
   }}

if (isset($_POST['question3']))
 {
  $question3=htmlentities($_POST['question3']);
  $note=0;

  if ($question3==48)
   {
     $note=$note+1;
     echo 'Corect';
   }
   else
   {
    echo 'Faux';
   }}
