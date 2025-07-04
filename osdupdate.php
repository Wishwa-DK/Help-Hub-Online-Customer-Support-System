<?php
 if (isset($_POST["Update"])) {
    $replyid=$_POST['id'];
    $username = $_POST['name'];
    $useremail = $_POST['mail'];
    $usermessage = $_POST['message'];

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
    $query = "UPDATE replytable SET CustomerName = '$username',CustomerEmail = '$useremail',Customermessage=' $usermessage' WHERE ReplyId=' $replyid'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script type="text/javascript">alert("Data Updated")</script>';
    } else {
        echo '<script type="text/javascript">alert("Data not Updated")</script>';
    }

    // Close the database connection
    mysqli_close($conn);
}


?>

<button><a href="osdreply.php">Back</a></button>