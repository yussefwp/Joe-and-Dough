<?php
	include('../config.php');

	$id = $_POST['id'];

	$isdeliverer = 0;
	if(array_key_exists('isdeliverer', $_POST) && $_POST['isdeliverer']){
		$isdeliverer = 1;	
	}
	//modify with query
	$query = "UPDATE users (`is-deliverer` = '$isdeliverer') WHERE `user-id` = '$id'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	if(!$result){
		die(mysqli_error($connection, $query));
	}
	else{
		echo "<p id='success'>Please go to <a href='../dashboard.php'>dashboard</a></p>";
	}
		
	


?>
