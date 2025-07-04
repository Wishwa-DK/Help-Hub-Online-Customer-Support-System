<?php
if (isset($_POST["Reply"])) {
    
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "Customer_support_system";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 


}
?>
