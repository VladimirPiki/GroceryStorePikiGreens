<?php
    
/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

 class DB
 {
    private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "";
	private $dbname		= "piljara";
	private $conn		= null;

	/**
	 */
	public function __construct(){
		try {
		  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $statement  = $this->conn->prepare("SET NAMES 'utf8'");
		  $statement->execute();
		  ini_set('default_charset', 'utf-8');
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}

	/**
	 * @param mixed $table_name
	 * @param mixed $columns_name
	 * @param mixed $columns_value
	 * 
	 * @return [type]
	 */
	public function insertRow($table_name,$columns_name,$columns_value){
		$stmt=$this->conn->prepare("INSERT INTO $table_name($columns_name)
		VALUES($columns_value)");
		$stmt->execute();
	}


	/**
	 * @param mixed $table_name
	 * @param mixed $pk_name
	 * @param mixed $pk_value
	 * 
	 * @return [type]
	 */
	public function deleteRow($table_name,$pk_name,$pk_value){
		$stmt=$this->conn->prepare("DELETE FROM $table_name 
		WHERE $pk_name=$pk_value");
		$stmt->execute();

	}

	/**
	 * @param mixed $table_name
	 * 
	 * @return [type]
	 */
	public function selectRow($table_name){
		$stmt=$this->conn->prepare("SELECT * from ".$table_name);
		$stmt->execute();
		return $stmt->fetchAll(); //execute vrakja vrednost a exec ne vrakja vrednost
	}

	/**
	 * @param mixed $table_name
	 * @param mixed $columns
	 * @param mixed $condition
	 * 
	 * @return [type]
	 */
	public function updateRow($table_name,$columns,$condition){
		$stmt=$this->conn->prepare("UPDATE $table_name
				SET $columns
				WHERE $condition");
		$stmt->execute();
	}

		/**
	 * @param mixed $storedProcedureName
	 * @param mixed $params
	 * 
	 * @return [type]
	 */
	public function callStoredProcedure($storedProcedureName,$params)
	{
		$stmt=$this->conn->prepare("call $storedProcedureName($params)");
		$stmt->execute();
		return $stmt->fetchAll();
	}

	/**
	 * @param mixed $selectRowStoredProcedureName
	 * 
	 * @return [type]
	 */
	public function selectRowStoredProcedure($selectRowStoredProcedureName){
		$stmt=$this->conn->prepare("call $selectRowStoredProcedureName()");
		$stmt->execute();
		return $stmt->fetchAll();
	}

 }
?>