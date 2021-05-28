<?php

/**
 * User Model
 */
// require __DIR__.'./../include/Database.php';
// require './../include/Database.php';
class User extends Database
{
	private $table;
	
	function __construct($tableName)
	{
		$this->table = $tableName;
		// print_r("Working");
		// print_r($this->pdo());
	}

	public function setTable($tableName)
	{
		$this->table = $tableName;
	}

	public function registerUser($data){

		$sql = "INSERT INTO ".$this->table."( `name`, `email`, `phone`, `address`, `city`, `state`, `country`, `zip`, `password`, `created_at`) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->pdo()->prepare($sql);
		$data = array_values($data);
		if($stmt->execute($data)){
			return 1;
		}else{
			return 0;	
		}
		
	}

	public function loginUser($data){

		$sql = "SELECT * FROM ".$this->table." WHERE email = ? AND password = ? ";
		$stmt = $this->pdo()->prepare($sql);
		$data = array_values($data);
		if($stmt->execute($data)){
			return $stmt->fetchAll();
		}else{
			return 0;	
		}

	}

	public function getProfileData($id){

		$sql = "SELECT * FROM ".$this->table." WHERE id = ? ";
		$stmt = $this->pdo()->prepare($sql);
		if($stmt->execute([$id])){
			return $stmt->fetchAll();
		}else{
			return 0;	
		}

	}

	public function userExist($email){

		$sql = "SELECT * FROM ".$this->table." WHERE email = ? ";
		$stmt = $this->pdo()->prepare($sql);
		if($stmt->execute([$email])){
			$res = $stmt->fetchAll();
			if(count($res)<=0){
				return 1;
			}else{
				return 0;
			}
		}else{
			return 0;	
		}

	}
}