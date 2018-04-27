<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" text="text/css">
		<title>Settings</title>
	</head>
	<body>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<div class="container">
			<div class="text-center">
				<h1>Joe and Dough</h1>	
				<form id="form-signin" class="text-left" action="update_settings.php?id=8" method="post">
					<h4>Settings:</h4>
					<div class="main-login-form">
						<div class="login-group">
								Deliverer?<input id="isdeliverer" class="form-control" name="isdeliverer" type="checkbox"></input> 
						</div>
					</div>
					<input type="submit" name="submit" value="Update Settings">
				</form>
				<br><br>
			</div>
		</div>
	</body>
</html>