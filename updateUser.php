<?php
$conn = mysqli_connect("localhost", "root", "", "customer_support_system");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        // Server-side validation (Start)
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $email = $_POST['Email'];
        $telNo = $_POST['Tel_no'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        // Validate the form fields
        if (empty($fname) || empty($lname) || empty($email) || empty($telNo) || empty($username) || empty($password)) {
            $message = "<p style='color:red;'>All fields are required</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "<p style='color:red;'>Invalid email format</p>";
        } elseif (!is_numeric($telNo) || strlen($telNo) !== 10) {
            $message = "<p style='color:red;'>Telephone Number must be 10 digits</p>";
        } else {
            // All validation checks passed, proceed with the database update (End)

            // Update the database using prepared statements
            $stmt = $conn->prepare("UPDATE users SET Fname=?, Lname=?, Email=?, Tel_no=?, Username=?, Password=? WHERE Id=?");
            $stmt->bind_param("ssssssi", $fname, $lname, $email, $telNo, $username, $password, $id);

            if ($stmt->execute()) {
                $message = "<p style='color:green;'>Record Modified Successfully !</p>";
                header("Location: userConnect.php"); // Redirect to the table page
                exit;
            } else {
                $message = "<p style='color:red;'>Error updating record: " . mysqli_error($conn) . "</p>";
            }
            $stmt->close();
        }
    }

    // Retrieve the record to display in the form
    $result = mysqli_query($conn, "SELECT * FROM users WHERE Id='$id'");
    $row = mysqli_fetch_array($result);
}

mysqli_close($conn);
?>
<html>
<head>
    <title>Update user table</title>
    <style>
            <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        form {
            background:floralwhite;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 0 auto;
        }

        .txtField {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .message {
            margin: 10px 0;
            color: #ff0000;
        }
    </style>
    </style>
</head>
<body style="background: #007770;">
<form name="frmUser" method="post" action="">
    <div><?php if (isset($message)) { echo $message; } ?></div>
    <div style="padding-bottom:5px;">
        <a href="userConnect.php">User List</a>
    </div>
    <input type="hidden" name="Id" class="txtField" value="<?php echo $row["Id"]; ?>">
    
    First Name: <br>
    <input type="text" name="Fname" class="txtField" value="<?php echo $row["Fname"]; ?>">
    <br><br>

    Last Name:<br>
    <input type="text" name="Lname" class="txtField" value="<?php echo $row["Lname"]; ?>">
    <br><br>

    Email:<br>
    <input type="text" name="Email" class="txtField" value="<?php echo $row["Email"]; ?>">
    <br><br>

    Tele-no:<br>
    <input type="number" name="Tel_no" class="txtField" value="<?php echo $row["Tel_no"]; ?>">
    <br><br>

    User Name:<br>
    <input type="text" name="Username" class="txtField" value="<?php echo $row["Username"]; ?>">
    <br><br>

    Password:<br>
    <input type="text" name="Password" class="txtField" value="<?php echo $row["Password"]; ?>">
    <br><br>

    <input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>
