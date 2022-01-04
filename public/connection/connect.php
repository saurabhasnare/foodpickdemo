<?php
//remote connection 
$servername = "sql6.freemysqlhosting.net"; //server
$username = "sql6463235"; //username
$password = "Bk7DC3JQhF"; //password
$dbname = "sql6463235";  //database

// devlopment connection
// main connection file for both admin & front end
// $servername = "localhost"; //server
// $username = "root"; //username
// $password = ""; //password
// $dbname = "online_rest";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>