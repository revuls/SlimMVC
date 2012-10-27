<?php

class User {
	
	// Get all users
	public function getUsers() {
		$r = array();		
		
		$core = Core::getInstance();

		$sql = "SELECT * FROM evnt_usuario";
		$stmt = $core->dbh->prepare($sql);
		//$stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
		} else {
			$r = 0;
		}		
		return $r;
	}

	// Get user by the Id
	public function getUserById($id) {
		$r = array();		
		
		$core = Core::getInstance();

		$sql = "SELECT nombre * evnt_usuario WHERE id=$id";
		$stmt = $core->dbh->prepare($sql);
		//$stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
		} else {
			$r = 0;
		}		
		return $r;
	}

	// Insert a new user
	public function insertUser($data) {
		
	}

	// Update the data of an user
	public function updateUser($data) {
		
	}

	// Delete user
	public function deleteUser($id) {
		
	}

}