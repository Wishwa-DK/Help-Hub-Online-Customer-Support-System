<?php
if (isset($_POST["submit"])) {
    
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "customer_support_system";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    

}
?>
