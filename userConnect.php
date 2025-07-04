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

// Check for a database connection erro
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<center><h1>User Details</h1></center>";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM `users` WHERE `Id` = '$id'");
    
}

// Get all of the data from the `users` table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check for a SQL error
if (!$result) {
    die("SQL error: " . mysqli_error($conn));
}

// Echo all of the data from the `users` table
echo "<table>";
echo "<tr><th>UserId</th><th>First_name</th><th>Last_name</th><th>Email</th><th>Tel_no</th><th>User_name</th><th>Password</th><th>Update</th><th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["Id"] . "</td>";
    echo "<td>" . $row["Fname"] . "</td>";
    echo "<td>" . $row["Lname"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td>" . $row["Tel_no"] . "</td>";
    echo "<td>" . $row["Username"] . "</td>";
    echo "<td>" . $row["Password"] . "</td>";
    echo "<td><a href='updateUser.php?id=" . $row["Id"] . "' class='btn-update'>update</a></td>";
    echo "<td><a href='UserConnect.php?id=" . $row["Id"] . "' class='btn-delete'>delete</a></td>";
    echo "</tr>";
}
echo '<a href="AdminP.php" class="btn-home">Home</a><br>';
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
