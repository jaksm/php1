<?php

try {
  session_start();
  $pdo = new PDO("mysql:host=localhost;dbname=web2shop;charset=utf8", "root", "");
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
  die($e->getMessage());
}
