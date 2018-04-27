<?php
	include('../config.php');

	$user_id = $_GET['id'];

	$order = $_POST['order'];
	$location = $_POST['location'];
	if($order == "" || $location == "" || $user_id == ""){
		header("Location: missing_field_orders.php");
	}
	else{
		$query = "INSERT INTO requests (`user_id`, `coffee_order`, `is_valid`, `location`) VALUES ('$user_id', '$order', '1', $location)";
		// $query = "INSERT INTO requests (`user_id`, `coffee_order`, `is_valid`, ``) VALUES ('$user_id', '$order', 1,)";
		//$date = timestamp('m/d/Y h:i:s a', time());
		$result = mysqli_query($connection, $query);
		if(!$result){
			die(mysqlireport());
		}
		else{
			header("Location: order_submitted.php")
		};
	}
	


?>
