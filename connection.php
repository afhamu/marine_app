<?php
 

$host='localhost';
$db = 'seaborn3_marine_logistics';
$username = 'seaborn3_afhamu';
$password = '@Afhamu66';
$options = [];
 
$dsn= "mysql:host=$host;dbname=$db";
 
try{
 // create a PDO connection with the configuration data
 $conn = new PDO($dsn, $username, $password, $options);
 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}