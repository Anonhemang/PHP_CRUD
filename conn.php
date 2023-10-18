<?php 
$username = "localhost";
$server = "root";
$pass = "";
$dbname = "pooja";


$conn = mysqli_connect($username,$server, $pass, $dbname);
if($conn){
    echo "Connected";
}
else{
    echo "error";
}


?>