
<?php
	include '../controller/parkingc.php';
	$parkingC=new parkingc();
	$parkingC->supprimerParking($_GET["matricule"]);
	header('Location:afficherParking.php');
?>
