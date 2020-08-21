<?php
var_dump($_POST);
$errors=[];



$message=$_POST['message'];
$headers= 'FROM: site@local.dev';
mail('annemarchasson@yahoo.fr','formulaire de contact', $message, $headers);