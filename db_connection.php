<?php
$servername = "fdb1032.awardspace.net";
$username = "4413656_chatapp";
$password = "PFct,ap#8e_p!Ci9";
$database = "4413656_chatapp"; // Database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>