<?php

$lName = filter_var($_POST['l-name'], FILTER_SANITIZE_STRING);
$fName = filter_var($_POST['f-name'], FILTER_SANITIZE_STRING);
$gender = $_POST['gender'];
$mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
$subject= $_POST['subject'];
$msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

if(isset($lName, $fName, $gender, $mail, $country, $subject, $msg)){
   if(false === filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error = "Le champ n'est pas rempli correctement";
   } else {
       $error;
   }
}

?>