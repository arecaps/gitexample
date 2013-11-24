<?php
$host = 'localhost';
$user = 'Yehuda';
$pass = 'pcs';

try {
  $DBH = new PDO("mysql:host=$host;", $user, $pass);

} catch (PDOException $e) {

echo $e->getMessage();
}
$DBH->query('DROP TABLE IF EXISTS school_data.enrollment11'); 
$DBH->query('CREATE DATABASE school_data');

$DBH->query('CREATE TABLE school_data.enrollment11 (ID INT PRIMARY KEY, enrollment INT)');

$DBH->query('DROP TABLE IF EXISTS school_data.info11'); 

$DBH->query('CREATE TABLE school_data.info11 (ID INT PRIMARY KEY, name VARCHAR (60), liabilities INT, net_assets INT, total_revenues INT)');




$DBH = null;
?>