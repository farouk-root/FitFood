<?php
	require '../../controller/reclamationC.php';
	ReclamationC::deleteReclamation($_GET["id"]);
	header('Location:afficherReclamation.php');
?>