<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'rocforum';

try{

$conn = new PDO("mysql:host=$host;dbname=$database;", $username, $password);

} catch(PDOException $e){

die("Connection failed :" . $e->getMessage());

}