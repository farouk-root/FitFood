<?php
//error_reporting (0);
    include_once '../model/reservation.php';
    include_once '../controller/reservationc.php';

    $error = "";

    // create adherent
    $reservation = null;

    // create an instance of the controller
    $reservationC = new reservationc();
    if (
        isset($_POST["id_table"]) &&
		isset($_POST["name"]) &&		
        isset($_POST["datereservation"]) &&
		isset($_POST["nombre"]) && 
        isset($_POST["num_tel"]) && 
        isset($_POST["id_client"])
    ) {
        if (
            !empty($_POST["id_table"]) && 
			!empty($_POST['name']) &&
            !empty($_POST["datereservation"]) && 
			!empty($_POST["nombre"]) && 
            !empty($_POST["num_tel"]) && 
            !empty($_POST["id_client"])
        ) {
            $reservation = new reservation(
                $_POST['id_table'],
				$_POST['name'],
                $_POST['datereservation'], 
				$_POST['nombre'],
                $_POST['num_tel'],
                $_POST['id_client']
            );
            $reservationC->modifierReservation($reservation, $_POST["id_table"]);
            header('Location:afficherReservation.php');
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
    <link href="css/button.css" rel="stylesheet" />
    <style>
      html, body {
      min-height: 100%;
      background-image: url("assets/img/table.jpg");      background-size: cover;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a82877; 
      }
      .banner {
      position: relative;
      height: 500px;
      background-image: url("assets/img/Gestion.jpg");      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a82877;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a82877;
      color: #a82877;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #a82877;
      background: #a82877;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #a82877;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #bf1e81;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
</head>
<body>
<a href="afficherReservation.php" class="button">⏮Return to Reservations</a>
    <div class="testbox">
       
        
        
       
			
		<?php
			if (isset($_POST['id_table'])){
				$reservation = $reservationC->recupererReservation($_POST['id_table']);
               
				
		?>
  
    

        
        <form action="" method="POST">
        <div class="banner">
        <h1>Update Tables</h1>
        </div>
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_table">id table:
                        </label>
                    </td>
                    <td><input type="text" name="id_table" id="id_table" value="<?php echo $reservation['id_table']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="name">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="name" id="name" value="<?php echo $reservation['name']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="datereservation">datereservation:
                        </label>
                    </td>
                    <td><input type="date" name="datereservation" id="datereservation" value="<?php echo $reservation['datereservation']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nombre">nombre:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nombre" value="<?php echo $reservation['nombre']; ?>" id="nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="num_tel">num_tel :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="num_tel" id="num_tel" value="<?php echo $reservation['num_tel']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_client">id_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_client" id="id_client" value="<?php echo $reservation['id_client']; ?>">
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
        </div>
    </body>
</html>