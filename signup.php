<?php
include_once "header.php";
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

    <div class="container">
        <div class="box form-box">

        <?php
        include("php/config.php");

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $Tel_no = $_POST['phone'];
            $password = $_POST['password'];

            // Validation: Check if fields are not empty
            if (empty($username) || empty($fname) || empty($lname) || empty($email) || empty($Tel_no) || empty($password)) {
                echo "<p style='color: red;'>*All fields are required.</p>";
            } else {
                // Validation: Check email format
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p style='color: red;'>*Invalid email format.</p>";
                } else {
                    // Validation: Check phone number format
                    if (!preg_match("/^\d{10}$/", $Tel_no)) {
                        echo "<p style='color: red;'>*Phone number must be a 10-digit number.</p>";
                    } else {
                        // Validation: Check password criteria (e.g., minimum length)
                        if (strlen($password) < 8) {
                            echo "<p style='color: red;'>*Password must be at least 8 characters long.</p>";
                        } else {
                            // Verify unique email address
                            $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");
                            if (mysqli_num_rows($verify_query) != 0) {
                                header("Location: Errmessage.php");
                            } else {
                                // Insert user data into the database
                                $query = mysqli_query($con, "INSERT INTO users (Username, Fname, Lname, Email, Tel_no, Password) VALUES ('$username', '$fname', '$lname', '$email', '$Tel_no', '$password')") or die("Error Occurred");
                                header("Location: Crrmessage.php");
                            }
                        }
                    }
                }
            }
        }
        ?>

        <header>Sign Up</header>
        <form action="" method="post">
            <div class="field input">
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="lname">Last name</label>
                <input type="text" name="lname" id="lname" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="phone">Phone number</label>
                <input type="number" name="phone" id="phone" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="username">Username</label>
                <input type="username" name="username" id="username" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Sign Up" required>
            </div>

            <div class="links">
                Already a member? <a href="login.php">Sign in</a>
            </div>
        </form>
        </div>
    </div>

</body>
</html>

<?php
include_once "footer.php";
?>
