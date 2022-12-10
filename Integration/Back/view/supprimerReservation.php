



<?php
	include '../controller/reservationc.php';
	$reservationC=new reservationc();
	$reservationC->supprimerReservation($_GET["id_table"]);
	header('Location:afficherReservation.php');
?>