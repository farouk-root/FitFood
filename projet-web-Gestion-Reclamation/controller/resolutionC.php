<?php 

include_once __DIR__.'../../config.php';
include_once __DIR__.'../../model/resolution.php';

class ResolutionC{

	static function listResolutions() {
		$sql_statement = "SELECT * FROM `resolution`";
		$db = config::getConnexion();
		try {
			$list = $db->query($sql_statement);
			return $list;
		} catch (Exception $e) {
			die("erreur:".$e->getMessage());
		}
	}

	static function listReclamationResolutions(int $reclamation_id) {
		$sql_statement = "SELECT * FROM `resolution` WHERE reclamation_id = :reclamation_id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':reclamation_id', $reclamation_id);
		try {
			$req->execute();
			return $req->fetchall();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}

	static function addResolution(Resolution $resolution) {
		$sql_statement = "INSERT INTO `resolution` VALUES (NULL, :reclamation_id, :body)";
		$db = config::getConnexion();
		try {
			$recipesStatement = $db->prepare($sql_statement);
			$recipesStatement->execute([
				'reclamation_id' => $resolution->getReclamationID(),
				'body'           => $resolution->getBody(),
			]);
		} catch (Exception $e) { 
			die("erreur:".$e->getMessage());
		}
	}

	static function modifyResolution(Resolution $resolution) {
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE resolution SET 
					body      = :body
				WHERE id = :id'
			);
			$query->execute([
				'id'        => $resolution->getID(),
				'body'      => $resolution->getBody()
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			die("erreur:".$e->getMessage());
		}
	}

	static function getResolution(int $id) {
		$sql_statement = "SELECT * FROM `resolution` WHERE id = :id";
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

	static function deleteResolution(int $id){
		$sql_statement = "DELETE FROM `resolution` WHERE id = :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}

	static function deleteReclamationResolutions(int $reclamation_id) {
		$sql_statement = "DELETE FROM `resolution` WHERE reclamation_id = :reclamation_id";
		$db = config::getConnexion();
		$req = $db->prepare($sql_statement);
		$req->bindValue(':reclamation_id', $reclamation_id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
		}
	}
}

?>