<?php
	include('../config.php');

	$id = $_GET['id'];

	$query = "UPDATE users set logged_in = 0 WHERE(`user-id` = '$id')";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query error");
	}
	header("Location: ../home.html");
	exit();
	die();
?>
