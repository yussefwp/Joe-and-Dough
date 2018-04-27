<?php
include("config.php");
if($_SESSION["user-id"] != NULL)
	header("Location: dashboard.php"); 

?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" text="text/css">
		<script src="https://use.fontawesome.com/e167ae865f.js"></script>
		<title>Joe and Dough | Home</title>
	</head>
	<body>
 		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
	      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	     	Joe and Dough
	  	  </a>
	      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <a href="create_user/login.html" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-disabled="false">Login</a>
	        <a href="create_user/new_user.html" class="btn btn-outline-info my-2 my-sm-0" role="button" aria-disabled="false">Create New User</a>
	      </div>
    	</nav>
    	<br>
		<div class="container">
			<div class="jumbotron text-center">
				<h1 style="color:black">Introducing Joe and Dough </h1>
			</div>
			<br>
		</div>
		<div class="container">
			<div class="row" style="color:black">
				<div class="col-lg-4">
					<i class="fa fa-user fa-3x fa-fw"></i>
					<h2>Order.</h2>
					<p>Order coffee from anywhere, from your favorite coffee shops. With a click of a button, coffee has never been so easy to order. Simply submit an order to a deliverer and you no longer need to stress about getting coffee from your favorite coffee shop, no matter how far away.</p>
				</div>
				<div class="col-lg-4">
					<i class="fa fa-truck fa-3x fa-fw"></i>
					<h2>Deliver.</h2>
					<p>Earn extra money by picking up coffee for others at your favorite coffee location. Submit a delivery request for other users to see to submit their coffee orders, drop off coffee at a common location, and make money in the process. </p>
				</div>
				<div class="col-lg-4">
					<i class="fa fa-coffee fa-3x fa-fw"></i>
					<h2>Coffee.</h2>
					<p>We created Joe and Dough to originally help busy people get caffeine in a quick way, without having to leave their busy lives. We wanted to join the delivery service industry by a high need (especially amongst college students): coffee.</p>
				</div>
			</div>
		</div>

	
		</footer>
		<script   src="https://code.jquery.com/jquery-3.3.1.slim.min.js"   integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="   crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
<html>