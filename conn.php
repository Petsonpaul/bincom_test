<?php

     $host = 'localhost';
     $db = 'bincom_test';
     $user = 'root';
     $pass = '';

     $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$conn = new PDO($dsn, $user, $pass);

	if (!$conn) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>