

<?php 
include '../config.php';
include_once '../model/reservation.php';
class reservationc{


	function afficherreservation(){
		$sql="SELECT * FROM reservation ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 



		function Ajouter($ser){
		$sql= "INSERT INTO `reservation` VALUES (:id_table,:name, :datereservation, :nombre, :num_tel,:id_client)";
		$db=config::getConnexion();
		try{ $recipesStatement = $db->prepare($sql);
			$recipesStatement->execute([ 'id_table'=>$ser->getID(),
							'name' =>$ser->getName(),
							'datereservation'=>$ser->getDatereservation(),
							'nombre'=>$ser->getNombre(),
							'num_tel'=>$ser->getNum_tel(),
							
								
									'id_client'=>$ser->getId_client(),
								
					
					



			]);
		}
		catch(Exception $e){ 
			
					die("erreur:".$e->getMessage());

		}

		}



		function supprimerReservation($id_table){
			$sql="DELETE FROM reservation WHERE id_table=:id_table";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_table', $id_table);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function recupererReservation($id_table){
			$sql="SELECT * from reservation where id_table=$id_table";
			//$sql="SELECT * from reservation WHERE id_table=:id_table";
			$db = config::getConnexion();
			$response = $db->query($sql);
			// $req=$db->prepare($sql);
			// $req->bindValue(':id_table', $id_table);
			try{
			return $response->fetch();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
	

		function modifierReservation($reservation, $id_table){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reservation SET 
						name= :name, 
						datereservation= :datereservation, 
						nombre= :nombre, 
						num_tel= :num_tel, 
						id_client= :id_client
					WHERE id_table= :id_table'
				);
				$query->execute([
					'name' => $reservation->getName(),
					'datereservation' => $reservation->getDatereservation(),
					'nombre' => $reservation->getNombre(),
					'num_tel' => $reservation->getNum_tel(),
					'id_client' => $reservation->getId_client(),
					'id_table' => $id_table
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		
	 
}
?>
