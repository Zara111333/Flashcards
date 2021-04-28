<?php
// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

session_start();

//require_once "../Query/Query.php";


//temporary, while on localhost
$url = "http://tazakoomkg.com/Flash";

$servername = "localhost";
$username = "tazakoom_flash_user";
$password = "flash_user";
$dbname = "tazakoom_flashcard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//     echo ' not connected';
// }
// else {
//     echo 'connected';}
