<?php
	include('../config.php');

	$fname = $_POST['fName'];
	$lname = $_POST['lName'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if(array_key_exists("fName", $_POST)==0 || array_key_exists("lName", $_POST)==0 || array_key_exists("password", $_POST)==0 || array_key_exists("email", $_POST)==0 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    	header("Location: invalid_field.html");
    	exit();
	}

	// if($fname == "" ||$lname == "" || $password== "" || $email == ""){
	// 	echo "Invalid Input.  Please try again.";
	// }

	else{
		$isdeliverer = 0;
		if(array_key_exists('isdeliverer', $_POST) && $_POST['isdeliverer']){
			$isdeliverer = 1;	
		}
		//modify with query
		$query = "INSERT INTO users (`first-name`, `last-name`, `password`, `email`, `is-deliverer`) VALUES ('$fname', '$lname','$password', '$email', '$isdeliverer')";

		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


		if(!$result){
			die(mysqli_error($connection, $query));
		}
		else{
			echo "<p id='success'>Please go to <a href='login.html'>login page</a> to log in. </p>";
		}
		
	}
	


?>
