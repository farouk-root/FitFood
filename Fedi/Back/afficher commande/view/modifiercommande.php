<?php
//error_reporting (0);
    include_once '../model/comman.php';
    include_once '../controller/commanc.php';

    $error = "";

    // create adherent
    $comman = null;

    // create an instance of the controller
    $commanC = new commanc();
    if (
        isset($_POST["name"]) &&
		isset($_POST["address"]) &&		
        isset($_POST["tel"]) &&
		isset($_POST["email"]) && 
        isset($_POST["city"])  &&
        isset($_POST["id_commande"])
    ) {
        if (
            !empty($_POST["name"]) && 
			!empty($_POST['address']) &&
            !empty($_POST["tel"]) && 
			!empty($_POST["email"]) && 
            !empty($_POST["city"]) &&
            !empty($_POST["id_commande"])

        ) {
            $comman = new comman(
                $_POST['name'],
				$_POST['address'],
                $_POST['tel'], 
				$_POST['email'],
                $_POST['city'],
                $_POST['id_commande'],
               
            );
            $commanC->modifiercomman($comman, $_POST["name"]);
            header('Location:afficher.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta address="viewport" content="width=device-width, initial-scale=1.0">
    <title>update commande</title>
    <link href="css/button.css" rel="stylesheet" />
    <style>
      html, body {
      min-height: 100%;
      background-image: url("");      background-size: cover;
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
      background-image: url("assets/img/table.jpg");      background-size: cover;
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
      .address-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .address-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
</head>
<body>
<a href="commande.php" class="button">⏮Return to commandes</a>
    <div class="testbox">
       
        
        
       
			
		<?php
			if (isset($_POST['name'])){
				$comman = $commanC->recuperercomman($_POST['name']);
               
				
		?>
  
    

        
        <form action="confige.php" method="POST">
        <div class="banner">
        <h1>Update commandes</h1>
        </div>
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="name">name:
                        </label>
                    </td>
                    <td><input type="text" name="name" id="name" value="<?php echo $comman['name']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="address"> address:
                        </label>
                    </td>
                    <td><input type="text" name="address" id="address" value="<?php echo $comman['address']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td><input type="text" name="tel" id="tel" value="<?php echo $comman['tel']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $comman['email']; ?>" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">city :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="city" id="city" value="<?php echo $comman['city']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_commande">id_commande :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_commande" id="id_commande" value="<?php echo $comman['id_commande']; ?>">
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