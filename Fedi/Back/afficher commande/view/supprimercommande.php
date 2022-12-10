<?php
	include '../controller/commanc.php';
	$commanC=new commanc();
	$commanC->supprimercomman($_GET["name"]);
	header('Location:afficher.php');
?>