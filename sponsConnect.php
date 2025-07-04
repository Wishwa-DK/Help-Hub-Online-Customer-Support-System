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

echo "<center><h1>Sponsor Details</h1></center>";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM `sponsor` WHERE `sID` = '$id'");
    
}
// Get all of the data from the `sponsor` table
$sql = "SELECT * FROM sponsor";
$result = mysqli_query($conn, $sql);

// Check for a SQL error
if (!$result) {
    die("SQL error: " . mysqli_error($conn));
}

// Echo all of the data from the `sponsor` table
echo "<table>";
echo "<tr><th>UserID</th><th>FName</th><th>Email</th><th>Package</th><th>CardName</th><th>CreditNum</th><th>ExpYear</th><th>CVV</th>><th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["sID"] . "</td>";
    echo "<td>" . $row["fName"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["package"] . "</td>";
    echo "<td>" . $row["nameC"] . "</td>";
    echo "<td>" . $row["creditN"] . "</td>";
    echo "<td>" . $row["eY"] . "</td>";
    echo "<td>" . $row["cvV"] . "</td>";
    echo "<td><a href='sponsConnect.php?id=" . $row["sID"] . "' class='btn-delete'>delete</a></td>";
    echo "</tr>";
}
echo '<a href="AdminP.php" class="btn-home">Home</a><br>';
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
