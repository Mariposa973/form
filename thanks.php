<?php

$user_name = $user_firstname = $user_email = $user_phone = $topic_request = $user_message = "";

// cleaning function for each input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlentities($data);
  return $data;
}

// define variables once passed through the cleaning function
$user_name = test_input($_POST["user_name"]);
$user_firstname = test_input($_POST["user_firstname"]);
$user_email = test_input($_POST["user_email"]);
$user_phone = test_input($_POST["user_phone"]);
$topic_request = test_input($_POST["topic_request"]);
$user_message = test_input($_POST["user_message"]);

// define an empty array to set all the errors
$errors = [];

//var_dump($user_firstname, $user_name, $user_email, $user_phone, $topic_request, $user_message);

// validation process for each input
if (empty($user_name)) {
    $errors[] = 'The name is mandatory';
 }

 if (empty($user_firstname)) {
    $errors[] = 'The firstname is mandatory';
 }
 
 if (strlen($user_firstname) > 100) {
    $errors[] = 'The firstname length should be less than 100 characters';
 }
 
 if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
   $errors[] = "The email address is not valid.";
  }
  
 if (empty($user_email)) {
    $errors[] = 'The email is mandatory';
 }

 if (empty($user_phone)) {
    $errors[] = 'The phone is mandatory';
 }

 if (empty($user_message)) {
    $errors[] = 'The message is mandatory';
 }

    // if errors array is not empty, then display the errors
 if (!empty($errors)) {
    var_dump($errors);
 }else {

    // if there is no error, then display the message : 

echo  'Merci '. $user_name . ' ' . $user_firstname . ' de nous avoir contacté à propos de "' . $topic_request . '". <br>',
'Un de nos conseiller vous contactera soit à l\'adresse ' . $user_email . ' ou par téléphone au ' . $user_phone . ' dans les plus brefs délais pour traiter votre demande : <br>';

$user_message;

 }

?>

