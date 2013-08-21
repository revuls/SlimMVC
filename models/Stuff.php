<?php

class Stuff {

	private $core;

	function __construct() {
		$this->core = Core::getInstance();			
	}
	
	// Get all stuff
	public function getAllStuff() {
		$r = array();		

		$sql = "SELECT * FROM stuff";
		$stmt = $this->core->dbh->prepare($sql);		

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
		} else {
			$r = 0;
		}		
		return $r;
	}
}