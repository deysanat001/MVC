<?php
/**
 * For Database Connecetion
 */
class Database
{
	private $db;
	private $dbname = "test";
	private $username = "root";
	private $password = "";

	public function pdo(){
		$this->db = new PDO("mysql:host=localhost; dbname=".$this->dbname, $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->db;

	}
}


?>
