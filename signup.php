<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	if (!empty($username) && !empty($password) && !empty($email)) {






?>