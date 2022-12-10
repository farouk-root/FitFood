<?php
//error_reporting (0);
    include_once '../model/parking.php';
    include_once '../controller/parkingc.php';

    $error = "";

    // create adherent
    $parking = null;

    // create an instance of the controller
    $parkingC = new parkingc();
    if (
        isset($_POST["matricule"]) &&
		isset($_POST["name"]) &&		
        isset($_POST["date"]) &&
		isset($_POST["placepark"]) && 
        isset($_POST["id_client"]) && 
        isset($_POST["id_table"])
    ) {
        if (
            !empty($_POST["matricule"]) && 
			!empty($_POST['name']) &&
            !empty($_POST["date"]) && 
			!empty($_POST["placepark"]) && 
            !empty($_POST["id_client"]) && 
            !empty($_POST["id_table"])
        ) {
            $parking = new parking(
                $_POST['matricule'],
				$_POST['name'],
                $_POST['date'], 
				$_POST['placepark'],
                $_POST['id_client'],
                $_POST['id_table']
            );
            $parkingC->modifierParking($parking, $_POST["matricule"]);
            header('Location:afficherParking.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherParking.php">Retour à la liste des parkings</a></button>
        <hr>
        
       
			
		<?php
			if (isset($_POST['matricule'])){
				$parking = $parkingC->recupererParking($_POST['matricule']);
               
				
		?>
  
    

        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="matricule">matricule:
                        </label>
                    </td>
                    <td><input type="text" name="matricule" id="matricule" value="<?php echo $parking['matricule']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="name">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="name" id="name" value="<?php echo $parking['name']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="date" name="date" id="date" value="<?php echo $parking['date']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="placepark">placepark:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="placepark" value="<?php echo $parking['placepark']; ?>" id="placepark">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_client">id_client :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_client" id="id_client" value="<?php echo $parking['id_client']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_table">id_table:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_table" id="id_table" value="<?php echo $parking['id_table']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>