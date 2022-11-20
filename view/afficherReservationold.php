<?php
	include '../Controller/reservationc.php';
	$reservationC=new reservationc();
	$listereservation=$reservationC->afficherreservation(); 
?>

<html>
	<head>
<style>
	h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 5px;
  text-align: left;
  font-weight: 500;
  font-size: 20px;
  color: #fff;
}
td{
  padding: 20px  ;
  text-align: middle;
  vertical-align:middle;
  font-weight: 300;
  font-size: 15px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

</style>

<script>
	// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
	
	</head>
	<body>






















	
	   <button><a href="AjouterReservation.php">Ajouter une reservation</a></button>
	   <section>
		<center><h1>Liste des reservations </h1></center>
		<div class="tbl-header">
		<table cellpadding="0" cellspacing="0" border="0" align="center">
		<thead>
			<tr>
				<th>id_table</th>
				<th>Nom client</th>
				<th>Date</th>
                <th>nombre</th>
				
				<th>num_tel</th>
				<th>id_client</th>
				<th>Modifier</th>
				<th>Supprimer</th>
				</thead>
			</tr>
			</table>
			</div>
			
			<div class="tbl-content">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
			<tbody>
			<?php
			foreach($listereservation as $reservationC){
			?>
			<tr>
		 		<td><?php echo $reservationC['id_table']; ?></td>
				<td><?php echo $reservationC['name']; ?></td>
		 		<td><?php echo $reservationC['datereservation']; ?></td>
				<td><?php echo $reservationC['nombre']; ?></td>
		 		<td><?php echo $reservationC['num_tel']; ?></td>
		 		<td><?php echo $reservationC['id_client']; ?></td>
				<td>
		 			<form method="POST" action="modifierReservation.php">
					<input type="submit" name="Modifier" value="Modifier">
	 				<input type="hidden" value=<?PHP echo $reservationC['id_table']; ?> name="id_table">
		 			</form>
		 		</td>
		<td>
		 			<a href="supprimerReservation.php?id_table=<?php echo $reservationC['id_table']; ?>">Supprimer</a>
				</td>
		 	</tr>
		 	<?php
		 		}
		 	?>
		 </tbody>
    </table>
  </div>
</section>
			
	</body>
</html>