<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'rocforum';

try{

$conn = new PDO("mysql:host=$host;dbname=$database;", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e){

die("Connection failed :" . $e->getMessage());

}
