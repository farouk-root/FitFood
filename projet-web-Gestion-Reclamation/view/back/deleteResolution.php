<?php
	require '../../controller/resolutionC.php';
	ResolutionC::deleteResolution($_GET["id"]);
	header('Location:afficherReclamation.php');
?>