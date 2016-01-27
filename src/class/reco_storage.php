<?php

// --------------------------------------------------------------------------
// Mysql по интерфейсу Reco_Storage
// --------------------------------------------------------------------------

class Reco_StorageMysql implements Reco_Storage {
	protected $dbh;

	public function __construct() {
		$dbh = reco_server_mysqlconnect();
	}

	public function CreateUpdateClient($clienturl, $name, $secret) {
		// TODO
		// 1. Check/Create tables
		// 2. Import data
	}

	public function AppendEntities() {
		// TODO
		// 1. Append list of entities to index
	}
}

?>