<?php
    $retour = mail('contact@marionhouze.com', 'Test envoie qcm', $_POST['nom']);

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

 header("Location:thankyou.php");

   ?>

