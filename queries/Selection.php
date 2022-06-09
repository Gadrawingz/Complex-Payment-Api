<?php

// Gadrawingz
include('../main/Connection.php');

class Selection extends Connection {


	public function __construct() {
		$obj = new Connection;
		$this->conn= $obj->connect();
	}

	public function selectSomething($arg1) {
		$sql= "SELECT * FROM `table` ";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
	}
}

?>