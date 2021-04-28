<?php

require '../core/init.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];

// 	$cards = mysqli_query($conn, "SELECT title, definition FROM cards where topic_id = '$id'");
	
// 	if (!$cards) {
//     printf("Error: %s\n", mysqli_error($conn));
//     exit();
//     } else {
//         echo "bala";
//         print(json_encode($cards));
//     }

// 	echo json_encode($cards);
	
	// $conn->table('topics')->where('user_id', '=', $id)->execute();

    // while($row = mysqli_fetch_array($cards))
    //  {
    //   echo $row[0];
    //  } 
    
    
    header('Location: ../index.php', $message='successfully created a topic!');

} else if (isset($_POST['topic_id'])) {
    
	$topic_id = $_POST['topic_id'];
	$topic_title = $_POST['topic_title'];
	$title = $_POST['titleCopy'];
	$def = $_POST['definition'];

	$result = mysqli_query($conn, "INSERT INTO cards (topic_id, title, definition) VALUES ('$topic_id', '$title', '$def') ");

	header("Location: ../study.php?topic_id=" . $topic_id . "&title=" . $topic_title);
    // header('Location: ../study.php', $message='successfully created a topic!');
}