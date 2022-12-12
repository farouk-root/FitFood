<?php 

include_once '../config.php';
include_once '../model/reclamation.php';
include_once '../controller/resolutionC.php';

class ReclamationC{

	static function listReclamations() {
		$sql_statement = "SELECT * FROM Reclamation";
		$db = config::getConnexion();
		try {
			$list = $db->query($sql_statement);
			return $list;
		} catch (Exception $e) {
			die("erreur:".$e->getMessage());
		}
	}

	static function listClientReclamations(int $client_id) {
		$sql_statement = "SELECT * FROM Reclamation WHERE client_id = :client_id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':client_id', $client_id);
		try {
			$req->execute();
			return $req->fetchall();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}

	static function addReclamation(Reclamation $reclamation) {
		$sql_statement = "INSERT INTO `Reclamation` VALUES (NULL, :client_id, :subject, :body, :status)";
		$db = config::getConnexion();
		try {
			$recipesStatement = $db->prepare($sql_statement);
			$recipesStatement->execute([
				'client_id' => $reclamation->getClientID(),
				'subject'   => $reclamation->getSubject(),
				'body'      => $reclamation->getBody(),
				'status'    => $reclamation->getStatus()
			]);
		} catch (Exception $e) { 
			die("erreur:".$e->getMessage());
		}
	}

	static function modifyReclamation(Reclamation $reclamation) {
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE Reclamation SET 
					client_id = :client_id, 
					subject   = :subject, 
					body      = :body, 
					status    = :status
				WHERE id = :id'
			);
			$query->execute([
				'id'        => $reclamation->getID(),
				'client_id' => $reclamation->getClientID(),
				'subject'   => $reclamation->getSubject(),
				'body'      => $reclamation->getBody(),
				'status'    => $reclamation->getStatus()
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			die("erreur:".$e->getMessage());
		}
	}

	static function getReclamation(int $id) {
		$sql_statement = "SELECT * FROM Reclamation WHERE id = :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
			return $req->fetch();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}

	static function deleteReclamation(int $id){
		ResolutionC::deleteReclamationResolutions($id);
		$sql_statement = "DELETE FROM Reclamation WHERE id = :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}

	static function deleteClientReclamation(int $id, int $client_id) {
		ResolutionC::deleteReclamationResolutions($id);
		$sql_statement = "DELETE FROM Reclamation WHERE id = :id AND client_id = :client_id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':id', $id);
		$req->bindValue(':client_id', $client_id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}
}

?>