<?php
	require '../../controller/reclamationC.php';

    # For testing purposes
    $_SESSION["client_id"] = 0;
    $_SESSION["password"] = "password";

    $authed = True;
    #$authed = $clientC.authentify($_SESSION["client_id"], $_SESSION["password"]);

    if (!$authed) {
        # TODO: change this to login page
        header('Location:index_.html');
        exit();
    }

    ReclamationC::deleteClientReclamation($_POST["id"], $_SESSION["client_id"]);
	header('Location:viewReclamations.php');
?>