<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "academy";

//create connection

$conn = mysqli_connect($servername, $username, $password, $DB);

//check connection
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}



?>
