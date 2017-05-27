<?php

namespace models;
use lib\Core;
use PDO;

class Stuff {

	protected $core;

	function __construct() {
		//$this->core = \lib\Core::getInstance();
	}
	
	// Get all stuff
	public function getAllStuff() {
		$r = array();		

		$sql = "SELECT * FROM stuff";
		$stmt = $this->core->dbh->prepare($sql);		

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(\PDO::FETCH_ASSOC);		   	
		} else {
			$r = 0;
		}		
		return $r;
	}

    public function setStuff() {
        return "hello world!!!";
    }
}
