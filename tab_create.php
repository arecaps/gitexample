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

$DBH->query('CREATE TABLE school_data.enrollment11 (ID INT, enrollment INT)');

$DBH = null;
?>