 <?php 
	include('../config.php');
?>
<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
	<body>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<div class="container">
			<div class="text-center">
				<h1>Joe and Dough</h1>	
				<form id="form-signin" class="text-left">
					<h4>Login</h4>
					<div class="main-login-form">
						<div class="login-group">
							<div class="form-group">
								<input id="user_email" class="form-control" name="email" placeholder="Email" type="text"></input>
							</div>
							<div class="form-group">
								<input id="user_pass" class="form-control" name="password" placeholder="Password" type="password"></input>
							</div>
						</div>
					</div>
					<a href= "new_user.php">Create new User</a>
					<a href="entry.php" class="btn btn-success btn-lg float-right" role="button" aria-disabled="false">Sign in</a>
				</form>
				<br><br>
			</div>
		</div>
	</body>
</html>