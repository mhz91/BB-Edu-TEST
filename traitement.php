<?php
require_once "questions.php";
$questions = getQuestions();

echo "<pre>";
print_r($_POST);
echo "</pre>";
//die;

$nom = htmlentities($_POST['nom']); // required
$prenom = htmlentities($_POST['prenom']); // required
$email = htmlentities($_POST['society']); // required
$telephone = htmlentities($_POST['mail']); // not required
$commentaire = htmlentities($_POST['phone']); // required

$message = "
  Nom: $nom,<br>
  Prénom: $prenom,<br>
";

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
echo $note;



$objet = "Nouveau QCM de $prenom $nom";

$retour = mail('contact@marionhouze.com', $message, $objet);

echo 'Nom : '.$_POST["nom"].'<br>';
echo 'Prénom : ' .$_POST["prenom"].'<br>';
echo 'Société : ' .$_POST["society"].'<br>';
echo 'E-mail : ' .$_POST["mail"].'<br>';
echo 'Téléphone : ' .$_POST["phone"].'<br>';

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

// Faire un if en fonction de $note pour afficher la bonne page
//header("Location:thankyou.php?note=$note");
