<?php
$host = 'localhost';
$user = 'Yehuda';
$pass = 'pcs';

try {
  $DBH = new PDO("mysql:host=$host;", $user, $pass);

} catch (PDOException $e) {

echo $e->getMessage();
}

$DBH->query('CREATE DATABASE school_data');

$DBH->query('CREATE TABLE enrollment (ID INT, Enrollment INT));

$DBH = null;
?>