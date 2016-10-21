<?php
$dbConfig = array(
	'username' => 'phinch',
	'password' => 'phinch',
	'host' => 'localhost',
	'dbname' => 'phinch'
);


$db = new PDO('mysql:host=' . $dbConfig['host'].';dbname=' . $dbConfig['dbname'],
 $dbConfig['username'], $dbConfig['password']);
?>
