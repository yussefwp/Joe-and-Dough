<?php
	include("config.php");
	if($_SESSION["user-id"] == NULL)
		header("Location: home.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css" text="text/css">
        <title>Joe and Dough | Dashboard</title>
    </head>
    <body>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <div class="container">
            <div class="text-center">
                <h1>Joe and Dough</h1>
                <br>
                <div class="container" style="background:#AED3C6;">
                    <?php
                    echo "<a id=\"start_delivery\" href=\"deliveries/start_delivery_input.php?id=" . $_GET['id'] . "\">Start a Delivery</a>";
                    ?>
                </div>
                <br>
                <div class="container" style="background:#DCF7AF; color:black">
					<?php
                    echo "<a id=\"view_orders\" href=\"orders/view_orders.php?id=" . $_GET['id'] . "\">View Your Orders</a>";
                    ?>
                </div>
                <br>
                <div class="container" style="background:#AED3C6; color:black">
					<?php
                    echo "<a id=\"view_deliveries\" href=\"deliveries/view_deliverers.php?id=" . $_GET['id'] . "\">View Active Deliveries</a>";
                    ?>
                </div>
                <br>
                <div class="container" style="background:#A08D8B;">
                    <?php
                    echo "<a id=\"logout\" href=\"create_user/logout.php?id=" . $_GET['id'] . "\">Sign Out</a>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
