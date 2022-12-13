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



	// orders inside table.
	echo "<table border=\"1\" cellpadding=\"5\">";
		echo "<tr>";
			echo "<th>name</th>";
			echo "<th>id_commande</th>";
			
		echo "</tr>";
		echo "<tr>";
			echo "<td>" . $_POST['name'] . "</td>";
			echo "<td>" . $_POST['id_commande'] . "</td>";
			
		echo "</tr>";
	echo "</table>";

	echo "<br>";
	echo "<br>";
	echo "<br>";
?>


</body>
</html>
<?php
	$id_commande = $_POST['id_commande'];
	echo "<h1>".$id_commande."</h1>";
	$name = $_POST['name'];
	$expm = $_POST['expm'];
	$expy= $_POST['expy'];
    $cvv = $_POST['cvv'];
	 
	// Database connection
	$conn = new mysqli('localhost','root','','integration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into payment(id_commande, name, expm, expy, cvv) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("isiii",$id_commande,$name,$expm,$expy,$cvv);
		$execval = $stmt->execute();
		
		
		$stmt->close();
		$conn->close();
	}
	header('Location:template.php');
?>