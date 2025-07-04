<?php



// Perform database connection and store the data

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "customer_support_system";

$con = new mysqli($server_name,$username,$password,$database_name);

if($con->connect_error){
    die("connection error");  
}else{
    echo'';
}



?>

