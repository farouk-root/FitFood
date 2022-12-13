<?php
	$id_commande = $_POST['id_commande'];
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
		$stmt = $conn->prepare("insert into payment(id_commande,name, expm, expy,cvv) values(?, ?, ?, ?, ? )");
		$stmt->bind_param("isiii",$id_commande,$name,$expm,$expy,$cvv);
		$execval = $stmt->execute();
		
		
		$stmt->close();
		$conn->close();
	}
	header('Location:payment.php');
?>