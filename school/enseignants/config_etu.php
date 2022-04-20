<?php
	const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'gestion_ecole';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>