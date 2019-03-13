<?php
require_once '../connection.php';
require_once '../helpers.php';

$name = $_POST['name'];
$avatar = $_POST['avatar'];
$email = $_POST['email'];
$password = $_POST['password'];
$adress = $_POST['adress'];

$errors = [];

if(empty($name)) {
  $errors[] = "Ime ne sme biti prazno";
}

if(empty($avatar)) {
  $errors[] = "Niste odabrali profilnu sliku";
}

if(empty($email)) {
  $errors[] = "Email ne sme biti prazan";
}

if(empty($password)) {
  $errors[] = "Password ne sme biti prazan";
}

if(empty($adress)) {
  $errors[] = "Niste uneli adresu";
}

if (count($errors)) {
  $_SESSION['errors'] = $errors;
  header("Location: ../pages/register.php");
}
