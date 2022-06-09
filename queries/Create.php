<?php

// Gadrawingz
include('../main/Connection.php');

class Create extends Connection {


	public function __construct() {
		$obj = new Connection;
		$this->conn= $obj->connect();
	}

	public function createSomething($arg1) {
		$sql= "";
		$query= $this->conn->prepare($sql);
		$query->execute();
		$count= $query->rowCount();
		return $count;
	}
}

?>