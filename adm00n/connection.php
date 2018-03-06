<?php

$host = 'localhost';
$username = 'root';
$password = 'nn';
$dbname = 'osis';

try {
	$connection = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
	echo $exception->getMessage();
	die();
}

?>
