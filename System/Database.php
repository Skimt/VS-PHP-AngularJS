<?php

// Only local access allowed.
if (!defined("API")) {
	die();
}

class Database {

	private function _getSqlString() {

		$dbhost = Config::DBHOST;
		$dbname = Config::DBNAME;
		$hasCharset = Config::HASCHARSET;
		$charSet = Config::CHARSET;

		$string = "mysql:";
		$string .= "host=$dbhost;";
		$string .= "dbname=$dbname;";

		if ($hasCharset) {
			$string .= "charset=$charSet;";
		}

		return $string;

	}

	public function getDatabaseConnection() {

		$connection = "";

		try {

			$sqlString = $this->_getSqlString();
			$connection = new PDO($sqlString, Config::DBUSER, Config::DBPASS);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {

            http_response_code(503);

			if (Config::INDEVMODE) {
                die($e->getMessage());
			} else {
                die($this->error = "Cannot connect to database.");
			}

		}

		return $connection;

	}

}

// Connect.
$db;

if (Config::ISUSINGDB) {

	$db = new Database();
	$db = $db->getDatabaseConnection();

}