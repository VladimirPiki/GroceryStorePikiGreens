<?php
    
/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

 class DB
 {
    /** 
    *   Class attributes
    */
    private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "";
	private $dbname		= "piljara";
	private $conn		= null;

    /** 
    *   Construct
    */
	public function __construct(){
		try {
		  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		  // set the PDO error mode to exception
		  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  //echo "Connected successfully";
		  $statement  = $this->conn->prepare("SET NAMES 'utf8'");
		  $statement->execute();
		  ini_set('default_charset', 'utf-8');
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
    
    /**
     * Methods
     */
	public function insertRow($table_name,$columns_name,$columns_value){
		$stmt=$this->conn->prepare("INSERT INTO $table_name($columns_name)
		VALUES($columns_value)");
		$stmt->execute();
	}

    /**
     * Methods
     */
	public function deleteRow($table_name,$pk_name,$pk_value){
		$stmt=$this->conn->prepare("DELETE FROM $table_name 
		WHERE $pk_name=$pk_value");
		
		$stmt->execute();

	}

    /**
     * Methods
     */
	public function selectRow($table_name){
		$stmt=$this->conn->prepare("SELECT * from ".$table_name);
		$stmt->execute();
		return $stmt->fetchAll(); //execute vrakja vrednost a exec ne vrakja vrednost
	}

    /**
     * Methods
     */ 
	public function updateRow($table_name,$columns,$condition){
		$stmt=$this->conn->prepare("UPDATE $table_name
				SET $columns
				WHERE $condition");
		$stmt->execute();
	}

 }
?>