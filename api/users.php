<?php

require '../core/init.php';

//if inserting a user
if (isset($_POST['email'])) {
	$username = $_POST['username'];
	$password=$_POST['password'];
	$email = $_POST['email'];

	$result = mysqli_query($conn, "INSERT INTO users (username, password, email) VALUES ('$username','$password', '$email') ");

    $user;
	if ($result) {
		$user = mysqli_query($conn, "SELECT username, password, email, id FROM users WHERE username = '$username' AND password = '$password' ");
		$user = mysqli_fetch_array($user,MYSQLI_ASSOC);
	} else {
		echo "Failed to create user";
	}

	$_SESSION['id'] = $user['id'];
	$_SESSION['created'] = time();

	header("Location: ../index.php");

} else { // if retrieving id from a user
	$username = $_POST['username'];
	$password = $_POST['password'];

	$user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");


	$user = mysqli_fetch_array($user,MYSQLI_ASSOC);

	if (count($user) > 0) {
		$_SESSION['id'] = $user['id'];
		$_SESSION['created'] = time();
		header('Location: ../index.php');
	} else {
		header('Location: ../login.php?message=There is no such users!');
	}
}