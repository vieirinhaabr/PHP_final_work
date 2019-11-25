<?php
class DataBase{

	
	private $connection;
	 
	
	public function getConnection(){
	    $this->connection =  new PDO("mysql:dbname=postit; host=localhost", "root", "");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $this->connection;
	}

    public function closeConnection(){
        $this->connection = null;
    }


}