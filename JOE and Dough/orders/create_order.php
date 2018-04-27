<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<title>Joe and Dough | Create Order</title>
		<link rel="stylesheet" href="../css/style.css" text="text/css">
	</head>
	<body>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<div class="container">
			<div class="text-center">
				<h1>Joe and Dough</h1>	
				<form id="form-signin" class="text-left" action= <?php echo ("http://proj-319-b1.cs.iastate.edu/orders/create.php?id=" . $_GET['id']);?> method="post">
					<div class="form-group">
    					<label for="order">Create Order:</label>
    					<input class="form-control" name="order" id="order" type="text"></input>
  					</div>
  					<div class="form-group">
  						<label for="order">Location:</label>
  						<input class="form-control" name="location" id="location" type="text"></input>
  					</div>
					<input type="submit" id="submit">
			</div>
		</div>
	</body>
</html>

