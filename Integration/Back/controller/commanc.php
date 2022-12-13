

<?php 
include_once '../config.php';
include_once '../model/comman.php';
class commanc{


	function affichercomman(){
		$sql="SELECT * FROM comman ";
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
		$sql= "INSERT INTO `comman` VALUES (:name,:tel, :email, :address, :city ,NULL)";
		$db=config::getConnexion();
		try{ $recipesStatement = $db->prepare($sql);
			$recipesStatement->execute([ 'name'=>$ser->getname(),
							'address' =>$ser->getaddress(),
							'tel'=>$ser->gettel(),
							'email'=>$ser->getemail(),
							'city'=>$ser->getcity(),
							//'id_commande'=>$ser->getid_commande(),
								
									
								
					
					



			]);
		}
		catch(Exception $e){ 
			
					die("erreur:".$e->getMessage());

		}

		}



		function supprimercomman($name){
			$sql="DELETE FROM comman WHERE name=:name";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':name', $name);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function recuperercomman($name){
			$sql="SELECT * from comman ";
			$db = config::getConnexion();
			//$db = config::getConnexion();
			$response = $db->query($sql);
			 $req=$db->prepare($sql);
			$req->bindValue(':name', $name);
			try{
			return $response->fetch();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
	

function recherchercomman($nom)
{
	$requete = "select * from comman where name like '%$nom%'";
	$config = config::getConnexion();
	try {
		$querry = $config->prepare($requete);
		$querry->execute();
		$result = $querry->fetchAll();
		return $result ;
	} catch (PDOException $th) {
		 $th->getMessage();
	}
}

		function modifiercomman($comman, $name){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPtel comman SET 
						address= :address, 
						tel= :tel, 
						email= :email, 
						city= :city, 
						id_commande= :id_commande;
					WHERE name= :name'
				);
				$query->execute([
					'address' => $comman->getaddress(),
					'tel' => $comman->gettel(),
					'email' => $comman->getemail(),
					'city' => $comman->getcity(),
					'id_commande' => $comman->getid_commande(),
					
					'name' => $name
				]);
				echo $query->rowCount() . " records UPtelD successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
}

?>
