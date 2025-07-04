<?php
if (isset($_POST["Find"])) {
    include 'osdsearch.php';

    $key = $_POST['keyword'];

    // Create a prepared statement
    $sql = "SELECT * FROM ticketsnew WHERE usersName = ?";
    $stmt = mysqli_stmt_init($conn);

    // Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $key);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        echo '<table style="border: 1px solid #000; border-collapse: collapse; width: 100%;">
                <tr>
                    <th style="border: 1px solid #000; padding: 8px;">Ticket ID</th>
                    <th style="border: 1px solid #000; padding: 8px;">User Name</th>
                    <th style="border: 1px solid #000; padding: 8px;">Message</th>
                    <th style="border: 1px solid #000; padding: 8px;">User Email</th>
                </tr>';
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td style="border: 1px solid #000; padding: 8px;">' . $row['ticketId'] . '</td>';
            echo '<td style="border: 1px solid #000; padding: 8px;">' . $row['usersName'] . '</td>';
            echo '<td style="border: 1px solid #000; padding: 8px;">' . $row['message'] . '</td>';
            echo '<td style="border: 1px solid #000; padding: 8px;">' . $row['usersEmail'] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
   
</head>
<body style="background-color:powderblue;">
  
    <center>
<script src="agentjavascript.js"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
    <h1 style="font-size: 50px;">Search Ticket </h1>
        <form class="Find ticket" action="osdticket.php" method="post">
            <input type="text" name="keyword" placeholder="enter the username">
            <button type="submit" name="Find">Find Ticket</button>
        </form>
        <br>
        <form class="Rt" action="osdreply.php" method="post">
        <button type="submit" name="reply" > Go to the Reply site </button>
</form>
    </main>
     
</center>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <button><a href="osdindex.php">Back</a></button>
       
</body>
</html>

 