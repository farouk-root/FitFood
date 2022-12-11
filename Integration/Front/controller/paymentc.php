

<?php 
include_once '../config.php';
include_once '../model/payment.php';
class paymentc{


	function afficherpayment(){
		$sql="SELECT * FROM payment ";
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
		$sql= "INSERT INTO `payment` VALUES (:id_commande,:name, :expm, :expy, :cvv, :id_payment)";
		$db=config::getConnexion();
		try{ $recipesStatement = $db->prepare($sql);
			$recipesStatement->execute([ 'id_commande'=>$ser->getid_commande(),
							'name' =>$ser->getname(),
							'expm'=>$ser->getexpm(),
							'expy'=>$ser->getexpy(),
							'cvv'=>$ser->getcvv(),
							
							'id_payment'=>$ser->getid_payment(),
							
									
								
					
					



			]);
		}
		catch(Exception $e){ 
			
					die("erreur:".$e->getMessage());

		}

		}



		function supprimerpayment($id_payment){
			$sql="DELETE FROM payment WHERE id_payment=:id_payment";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_payment', $id_payment);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function recupererpayment($id_payment){
			$sql="SELECT * from payment ";
			$db = config::getConnexion();
			//$db = config::getConnexion();
			$response = $db->query($sql);
			 $req=$db->prepare($sql);
			$req->bindValue(':id_payment', $id_payment);
			try{
			return $response->fetch();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

	

		function modifierpayment($payment, $id_payment){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPexpm payment SET 
					id_commande= :id_commande, 
						name= :name, 
						expm= :expm, 
						expy= :expy, 
						cvv= :cvv, 
						
					WHERE id_payment= :id_payment'
				);
				$query->execute([
					'id_commande' => $payment->getid_commande(),
					'name' => $payment->getname(),
					'expm' => $payment->getexpm(),
					'expy' => $payment->getexpy(),
					'cvv' => $payment->getcvv(),
					
					'id_payment' => $id_payment
				]);
				echo $query->rowCount() . " records UPexpmD successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>
