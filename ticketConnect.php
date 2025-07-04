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

echo "<center><h1>Ticket Details</h1></center>";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM `ticketsnew` WHERE `usersName` = '$id'");
    
}

// Get all of the data from the `ticketsnew` table
$sql = "SELECT * FROM ticketsnew";
$result = mysqli_query($conn, $sql);

// Check for a SQL error
if (!$result) {
    die("SQL error: " . mysqli_error($conn));
}

// Echo all of the data from the `ticketsnew` table
echo "<table>";
echo "<tr><th>User Name</th><th>User Email</th><th>Ticket ID</th><th>Subject</th><th>Message</th><th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["usersName"] . "</td>";
    echo "<td>" . $row["usersEmail"] . "</td>";
    echo "<td>" . $row["ticketId"] . "</td>";
    echo "<td>" . $row["subject"] . "</td>";
    echo "<td>" . $row["message"] . "</td>";
    echo "<td><a href='ticketConnect.php?id=" . $row["usersName"] . "' class='btn-delete'>delete</a></td>";
   echo "</tr>";
}
echo '<a href="AdminP.php" class="btn-home">Home</a><br>';
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
