<?php
//fix this again u idiot
	include('../config.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT `user-id` FROM users WHERE(`email` = '$email' AND `password` = '$password')";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die(my_sqli_error());
	}
	else{
		$row = $result->fetch_assoc();
		if($row["user-id"] != null){
			$id = $row["user-id"];
			$query = "UPDATE users SET `logged_in` = 1 WHERE(`user-id` = $id)";
			$result = mysqli_query($connection, $query);
			if(!$result){
				die(my_sqli_error($connection));
			}
			header("Location: ../dashboard.php?id=".$row["user-id"]);
			exit();
		}
		else{
			header("Location: incorrect.html");
			exit();
		}
		die();
}
?>
