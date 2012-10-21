<?php

class User {
	
	public function getUsers() {
		$r = array();		
		
		$core = Core::getInstance();

		$sql = "SELECT nombre FROM evnt_usuario";
		$stmt = $core->dbh->prepare($sql);
		//$stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
		} else {
			echo "no data";
		}		
		return $r;
	}

}