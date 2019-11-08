<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// database connection will be here

// include database and object files
include_once '../config/database.php';
include_once '../objects/otp.php';
 
// instantiate database and otpdata object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$otpdata = new otpdata($db);
 
// read otpdatas will be here

// query otpdatas
$stmt = $otpdata->read();
$num = $otpdata->count();
//$num = 1;
//$stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // otpdatas array
    $otpdatas_arr=array();
    $otpdatas_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
        
        $otpdata_item=array(
            "id"=> $id,
            "number" => $number,
            "otp" => $otp
        );
 
        array_push($otpdatas_arr["records"], $otpdata_item);
        
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show otpdatas data in json format
    echo json_encode($otpdatas_arr);
    //print_r($i);
}else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => "No otp found.")
    );
}
 
// no otpdatas found will be here