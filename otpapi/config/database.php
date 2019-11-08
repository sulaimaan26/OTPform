<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "otp";
    private $username = "admin";
    private $password = "password@123";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}



/*
SQL CODE
CREATE TABLE otp (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
number VARCHAR(30) NOT NULL,
otp VARCHAR(30) NOT NULL)
*/

?>