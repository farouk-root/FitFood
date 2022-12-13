<!DOCTYPE html>
<html>
<head>
	<title>Order Set</title>
	<style type="text/css">
		td { padding: 40px; }
	</style>
</head>
<body>

	
<?php 

	// check for submit button 
	if (isset($_POST['submit'])) {
		echo "<p>Dear <strong>" . $_POST['name'] . "</strong>, your order has been set.";
			echo "<br> We well contact you soon.";
		echo "</p>";
	}

	echo "<p>This is your order.</p>";

	// orders inside table.
	echo "<table border=\"1\" cellpadding=\"5\">";
		echo "<tr>";
			echo "<th>Drinks</th>";
			echo "<th>Size</th>";
			echo "<th colspan=\"\">Delivery Time</th>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>" . $_POST['type'] . "</td>";
			echo "<td>" . $_POST['size'] . "</td>";
			echo "<td>" . $_POST['delivery_time'] . "</td>";
		echo "</tr>";
	echo "</table>";

	echo "<br>";
	echo "<br>";
	echo "<br>";
?>

<!-- Footer -->
<footer>
	<p>
		<address>
			<p><strong>Address#1: </strong> Lac1, Hawza Street</p>
			<p><strong>Phone: </strong> +21672120100</p>
			<p><strong>Email us: </strong> <a href="mailto:FitFod@gmail.com">FitFod@gmail.com</a></p>
		</address>
	</p>

</footer>
<h3> <a href="payment/index.html"> click to pay</a> </h3>
</body>
</html>
<?php
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email= $_POST['email'];
    $city = $_POST['city'];
	$address = $_POST['address'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','integration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into comman(name, tel, email,address,city) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss",$name, $tel,$email,$address,$city);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		
		$stmt->close();
		$conn->close();
	}
?>