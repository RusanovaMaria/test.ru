<?php 
require 'connect.php';

$name = trim($_REQUEST['name']);
$surname = trim($_REQUEST['surname']);
$email = trim($_REQUEST['email']);
$password = trim($_REQUEST['password']);

$insert_sql = "INSERT INTO users (name, surname, email, password)" .
"VALUES('{$name}', '{$surname}', '{$email}', '{$password}');";
mysql_query($insert_sql);

require_once('profile.html');
?>