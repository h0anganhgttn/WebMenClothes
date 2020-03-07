<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "register";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
 
            return $this->conn;
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
    }
}
?>