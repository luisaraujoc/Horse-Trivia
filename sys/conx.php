<?php

class Database{

    private $host = 'localhost';
    private $dbname = 'horsetrivia_db';
    private $username = 'root';
    private $password = '';
    public $conn;


    public function dbConnection()
        {
        
            $this->conn = null;    
            try
            {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
            }
            catch(PDOException $exception)
            {
                echo "Connection error: " . $exception->getMessage();
            }
            
            return $this->conn;
        }
    }    
?>