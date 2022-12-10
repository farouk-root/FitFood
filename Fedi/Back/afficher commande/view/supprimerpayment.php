<?php
	include '../controller/paymentc.php';
	$paymentC=new paymentc();
	$paymentC->supprimerpayment($_GET["id_payment"]);
	header('Location:afficher.php');
?>