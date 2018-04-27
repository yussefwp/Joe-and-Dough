<?php
	include('../config.php');
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$reEnter = $_POST['password2'];

	if($password != $reEnter || $reEnter == null || $password == null){
		echo "<div id='pass'>Incorrect Password Entered</div>";
		exit();
	}
	$query = "UPDATE `users` SET `password` = '$reEnter' WHERE `email` = '$email'";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("No valid user email exists");
	}
	else{
		echo "<div id='pass'>Password Changed</div>";
		exit();
	}
		die();
?>

