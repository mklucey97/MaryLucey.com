<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	if (!empty($username) && !empty($password) && !empty($email)) {
		 // Insert user into database
		 $sql = "INSERT INTO signup (username, password, email) VALUES ('$username', '$password', '$email')";






?>