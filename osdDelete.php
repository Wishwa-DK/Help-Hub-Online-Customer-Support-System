 <?php
 if (isset($_POST["Delete"])) {
    $username = $_POST['name'];

    // Create a connection to the database
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "customer_support_system";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Assuming you want to delete records based on 'usersName'
    $query = "DELETE FROM replytable where CustomerName = '$username'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script type="text/javascript">alert("Data Deleted")</script>';
    } else {
        echo '<script type="text/javascript">alert("Data not Deleted")</script>';
    }

    // Close the database connection
    mysqli_close($conn);
}


?>






<?php
if (isset($_POST["delete"])) {

$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "tickettable";

$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
}
?>

<button><a href="osdreply.php">Back</a></button>