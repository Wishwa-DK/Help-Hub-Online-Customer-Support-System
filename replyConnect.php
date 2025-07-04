<head>
  <link rel="stylesheet" href="assets\css\style.css">
</head>

<?php
// Connect to the database
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "customer_support_system";

$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

// Check for a database connection error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<center><h1>Ticket Replies</h1></center>";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM `replytable` WHERE `ReplyId` = '$id'");
    
}

// Get all of the data from the `replytable` table
$sql = "SELECT * FROM replytable";
$result = mysqli_query($conn, $sql);

// Check for a SQL error
if (!$result) {
    die("SQL error: " . mysqli_error($conn));
}

// Echo all of the data from the `replytable` table
echo "<table>";
echo "<tr><th>Reply ID</th><th>Customer Name</th><th>Customer Email</th><th>Customer message</th><th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["ReplyId"] . "</td>";
    echo "<td>" . $row["CustomerName"] . "</td>";
    echo "<td>" . $row["CustomerEmail"] . "</td>";
    echo "<td>" . $row["Customermessage"] . "</td>";
    echo "<td><a href='replyConnect.php?id=" . $row["ReplyId"] . "' class='btn-delete'>delete</a></td>";
    echo "</tr>";
}
echo '<a href="AdminP.php" class="btn-home">Home</a><br>';
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
