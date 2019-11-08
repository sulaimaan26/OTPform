<?php
class otpdata{
    private $conn;
    private $table_name = "otp";
    public $number;
    public $otp;



    public function __construct($db){
        $this->conn = $db;
    }


    function read(){ 
        // select all query
        $query = "SELECT * FROM  $this->table_name";
        // prepare query statement
        $stmt = $this->conn->prepare($query);     
        // execute query
        $stmt->execute();     
        return $stmt;
    }

    function search($keywords){ 
        // select all query
        $query = "SELECT * FROM  $this->table_name where number=?";
        // prepare query statement
        $stmt = $this->conn->prepare($query);     
        // execute query
        $this->number=htmlspecialchars(strip_tags($keywords));
        $stmt->bindParam(1,$keywords);
        $stmt->execute();     
        return $stmt;
    }

    function delete(){
 
        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE number = ?";
     
        // prepare query
        $stmt = $this->conn->prepare($query);
     
        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->number));
     
        // bind id of record to delete
        $stmt->bindParam(1, $this->number);
     
        // execute query
        if($stmt->execute()){
            return true;
        }
     
        return false;
         
    }

    function rowCount(){
        return 2;
    }
    public function count(){
        $query = "SELECT COUNT(*) as total_rows FROM " . $this->table_name . "";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        return $row['total_rows'];
    }


    public function count_num($keywords){
        $query = "SELECT COUNT(*) as total_rows FROM  ". $this->table_name ." WHERE number='$keywords'";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        return $row['total_rows'];
    }

    // create product
function create(){
 
    // query to insert record
    $query = "INSERT INTO ".$this->table_name." (number,otp) VALUES (:number,:otp)";
    // prepare query
    $stmt = $this->conn->prepare($query);
    //rowCount();
    // sanitize
    $this->number=htmlspecialchars(strip_tags($this->number));
    
    //if(count_num($this->number)>0){
    // query to insert record
    //$query = "UPDATE ".$this->table_name." SET otp =:otp where number=:number";
    // prepare query
    //$stmt = $this->conn->prepare($query);
        
    //}
    $this->otp=htmlspecialchars(strip_tags($this->otp));
    
    // bind values
    $stmt->bindParam(":number", $this->number);
    $stmt->bindParam(":otp", $this->otp);
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

function update(){
 
    // query to insert record
    $query = "UPDATE ".$this->table_name." SET otp =:otp where number=:number";
    // prepare query
    $stmt = $this->conn->prepare($query);
    //rowCount();
    // sanitize
    $this->number=htmlspecialchars(strip_tags($this->number));
    
    //if(count_num($this->number)>0){
    // query to insert record
    //$query = "UPDATE ".$this->table_name." SET otp =:otp where number=:number";
    // prepare query
    //$stmt = $this->conn->prepare($query);
        
    //}
    $this->otp=htmlspecialchars(strip_tags($this->otp));
    
    // bind values
    $stmt->bindParam(":number", $this->number);
    $stmt->bindParam(":otp", $this->otp);
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}



}