<?php
include_once"header.php";
?>

<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to the login page
    exit();
}

if (isset($_POST["submit"])) {
    
    include 'connet.php'; 

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (empty($name) || empty($mail)) {
        echo"<h2><p style='color: red;'>empty fields</p><h2>";
    } else {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo"<h2><p style='color: red;'>invalid e mail</p><h2>";
        } else {
            $sql = "INSERT INTO ticketsnew (usersName, usersEmail, subject, message) VALUES ('$name', '$mail', '$subject', '$message')";
            try {
                if (mysqli_query($conn, $sql)) {
                    echo "<h2><p style='color: green;'>Successfully inserted</p><h2>";
                } else {
                    throw new Exception('Cannot run the query inside the database');
                }
            } catch (Exception $e) {
                echo "Exception Caught: " . $e->getMessage();
            } finally {
                echo " :>";
            }

            // Close the database connection
            mysqli_close($conn);
        }
    }
}
//find ticket php code
      
if (isset($_POST["Find"])) {
    include 'search.php';

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

        // Get the data
        $result = mysqli_stmt_get_result($stmt);

        // Apply CSS styling for the table
        echo '<style>';
        echo 'th, td { border: 1px solid #dddddd; text-align: center; padding: 8px; }'; // Add styling to both header and data cells
        echo 'table { border-collapse: collapse; width: 60%; margin: 0 auto; }'; // Center-align the table
        echo '</style>';

        echo '<table>';
        echo '<tr><th>ticketId</th><th>usersName</th><th>message</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['ticketId'] . '</td>';
            echo '<td>' . $row['usersName'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}



        
        if (isset($_POST["Delete"])) {
            $name = $_POST['name'];
        
            if (empty($name)) {
                echo '<script type="text/javascript">alert("Please enter a user name to delete")</script>';
            } else {
                include 'delete.php';
        
                $dbServer = "localhost";
                $dbUser = "root";
                $dbPass = "";
                $database = "customer_support_system";
        
                $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);
        
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
        
                $query = "DELETE FROM ticketsnew where usersName = '$name'";
                $query_run = mysqli_query($conn, $query);
        
                // Check how many rows were affected by the DELETE query
                $affected_rows = mysqli_affected_rows($conn);
        
                if ($query_run && $affected_rows > 0) {
                    echo '<script type="text/javascript">alert("Data Deleted")</script>';
                } else {
                    echo '<script type="text/javascript">alert("No data to delete")</script>';
                }
        
                // Close the database connection
                mysqli_close($conn);
            }
        }

        if (isset($_POST["Reply"])) {
            include 'Reply.php';
            
            $R_key = $_POST['c_reply'];
            
            // Create a prepared statement
            $sql = "SELECT * FROM replytable WHERE CustomerName = ?";
            $stmt = mysqli_stmt_init($conn);
            
            // Prepare the prepared statement
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed";
            } else {
                mysqli_stmt_bind_param($stmt, "s", $R_key);
                mysqli_stmt_execute($stmt);
                
                // Get the data
                $result = mysqli_stmt_get_result($stmt);
                
                // Apply CSS styling for the table
                echo '<style>';
                echo 'th, td { border: 1px solid #dddddd; text-align: center; padding: 8px; }'; // Add styling to both header and data cells
                echo 'table { border-collapse: collapse; width: 60%; margin: 0 auto; }'; // Center-align the table
                echo 'th { padding: 10px; }'; // Add padding to table header cells
                echo '</style>';
                
                echo '<table>';
                echo '<tr><th>ReplyId</th><th>CustomerName</th><th>CustomerMessage</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['ReplyId'] . '</td>';
                    echo '<td>' . $row['CustomerName'] . '</td>';
                    echo '<td>' . $row['Customermessage'] . '</td>';
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
    <title>Ticket</title>
    <link rel="stylesheet" href="styles/tc.css">
</head>
<body>

    <main>
        <p><h2>TICKETS<h2></p>
        <form class="ticket-form" action="ticket.php" method="post">
            <input type="text" name="name" placeholder="username">
            <input type="text" name="mail" placeholder="your e-mail">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="message"></textarea>
            <button type="submit" name="submit">send ticket</button><br>
        </form><br><br>

        <form class="Find ticket" action="ticket.php" method="post">
            <input type="text" name="keyword" placeholder="enter the username">
            <button type="Find" name="Find">Find Ticket</button>

        </form>

        <form class="Delete Ticket" action = "ticket.php" method="post">
            <input type = "text" name="name" placeholder="enter the user name">
            <button class ="delBtn" type="Delete" name="Delete" > Delete Ticket</button>
    </form><br>

    <form class="Find Reply" action = "ticket.php" method="post">
            <input type = "text" name="c_reply" placeholder="enter the user name">
            <button class ="findBtn" type="Find Reply" name="Reply">Find Reply</button>
        </form>

    </main>
</body>
</html>

<?php
include_once"footer.php";
?>
