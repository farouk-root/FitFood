<?php
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email= $_POST['email'];
    $city = $_POST['city'];
	$address = $_POST['address'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','fadi');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into comman(name, tel, email,city,address) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss",$name, $tel,$email,$city,$address);
		$execval = $stmt->execute();
		
		
		$stmt->close();
		$conn->close();
	}
?>