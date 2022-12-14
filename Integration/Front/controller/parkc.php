

<?php 
include_once '../config.php';
include_once '../model/park.php';
class parkc{


	function afficherpark(){
		$sql="SELECT * FROM park ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 


	function recupererPark($placepark){
		$sql="SELECT * from park where placepark=$placepark";
		//$sql="SELECT * from parking WHERE matricule=:matricule";
		$db = config::getConnexion();
		$response = $db->query($sql);
		try{
		return $response->fetch();
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	}

// I made these functions disabled because I dont need them now 
// The management of the park is static , in fact I dont need to update 
// the park or delete it . It's a Building composed of different blocs 

//The only thing that'll be updated is the number of places in each Bloc , 
//the client reserves a  place so I'll update the nbr of places .

function updatePark($placepark)
{

	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			'UPDATE `park` SET `nb_places` :=`nb_places` - 1  WHERE `park`.`placepark` = :placepark '
						
		);
		$query->execute([
			//'nb_places' => $parking->getNbr_places(),
			/*'Bloc' => $parking->getBloc(),*/
			'placepark' => $placepark

		]);
		echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
		$e->getMessage();
	}

}




		/*function Ajouter($ser){
		$sql= "INSERT INTO `parking` VALUES (:matricule,:name, :date, :placepark, :id_client,:id_table)";
		$db=config::getConnexion();
		try{ $recipesStatement = $db->prepare($sql);
			$recipesStatement->execute([ 'matricule'=>$ser->getID(),
							'name' =>$ser->getName(),
							'date'=>$ser->getDate(),
							'placepark'=>$ser->getPlacepark(),
							'id_client'=>$ser->getId_client(),
							
								
									'id_table'=>$ser->getId_table(),
								
					
					



			]);
		}
		catch(Exception $e){ 
			
					die("erreur:".$e->getMessage());

		}

		}



		function supprimerParking($matricule){
			$sql="DELETE FROM parking WHERE matricule=:matricule";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':matricule', $matricule);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}*/

		
	

		/*function modifierParking($parking, $matricule){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE parking SET 
						name= :name, 
						date= :date, 
						placepark= :placepark, 
						id_client= :id_client, 
						id_table= :id_table
					WHERE matricule= :matricule'
				);
				$query->execute([
					'name' => $parking->getName(),
					'date' => $parking->getDate(),
					'placepark' => $parking->getPlacepark(),
					'id_client' => $parking->getId_client(),
					'id_table' => $parking->getId_table(),
					'matricule' => $matricule
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
*/
		
	 
}
?>
