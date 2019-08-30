<?php



$servername = "localhost";
$username = "learnphp";
$password = "Password@123";
$dbname = "learnphp";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

	if(isset($_POST["submit"])&&($_POST["number"])&&($_POST["otp"])){

	$mobilenumber=$_POST["number"];
    $otp=$_POST["otp"];
    $check="SELECT * FROM otp WHERE number = '$mobilenumber'";

	$sql = "INSERT INTO otp (number,otp) VALUES ($mobilenumber,$otp)";
	$rs = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
			if($data[0] > 1){
					$sql1="DELETE FROM otp WHERE otp.number = $mobilenumber;";
					$conn->query($sql1);
					
						if ($conn->query($sql) === TRUE) {
							    //echo "New record created successfully";
							    //header($pageloc);
							    //$status->db_status=1;
							    header("Location: /otp/success.php");
						} else {
							    echo "Error: " . $sql . "<br>" . $conn->error;
							    header("Location: /otp/fail.php");
								
						}
						$conn->close();
					
			}else{
							if ($conn->query($sql) === TRUE) {
							    //echo "New record created successfully";
							    header("Location: /otp/success.php");
							} else {
							    //echo "Error: " . $sql . "<br>" . $conn->error;
							    header("Location: /otp/fail.php");
							    
							 }
							$conn->close();
			}


}else{
	header("Location: /otp"); 

}

?>

