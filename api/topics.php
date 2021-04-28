<?php

require '../core/init.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];


	$topics = mysqli_query($conn, "SELECT id, name FROM topics where user_id = '$id'");

    while($row = mysqli_fetch_array($topics))
     {
     	echo $row[0];
     	echo ',';
       echo($row[1]);
       echo ',';
     } 
} 

if (isset($_POST['newTopicInput'])) {

	$id = $_SESSION['id'];


	$title = $_POST['newTopicInput'];

	$result = mysqli_query($conn, "INSERT INTO topics (user_id, name) VALUES ('$id', '$title') ");

	header('Location: ../index.php', $message='successfully created a topic!');
}