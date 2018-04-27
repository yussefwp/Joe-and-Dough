<?php
	$dbhost = "mysql.cs.iastate.edu";
	$dbuser = "dbu319b1";
	$dbpass = "VfcXqcr#";
	$dbname = "db319b1";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(mysqli_connect_errno()){
		die("database connection failed:"
			. mysqli_connect_error().
		 " (" . mysqli_connect_errno() . ")");
	} 
	$location = $_POST['location'];
	$delivtime = $_POST['delivtime'];
	$olimit = $_POST['olimit'];
	/*if($fname == "" ||$lname == "" || $password== "" || $email == ""){
		echo "invalid credentials";
	}
	else{*/
		$query = "INSERT INTO db319b1.deliveries (location, delivtime, olimit, deliverer) VALUE ('$location', '$delivtime', '$olimit', 'TChalla')";
		$result = mysqli_query($connection, $query);
		if(!$result){
			die("failure!");
		}
	/*}*/
?>