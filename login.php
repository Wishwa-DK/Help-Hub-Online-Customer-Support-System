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
    <title>Login page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

    <div class="container">
        <div class="box form-box">

        <?php
        include("php/config.php");

        if (isset($_POST['submit'])) {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            // Validation: Check if email and password are not empty
            if (empty($email) || empty($password)) {
                echo "<p style='color: red;'>*Both email and password are required.</p>";
            } else {
                // Validation: Check email format
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p style='color: red;'>*Invalid email format.</p>";
                } else {
                    // Validation: Check password criteria (e.g., minimum length)
                    if (strlen($password) < 8) {
                        echo "<p style='color: red;'>*Password must be at least 8 characters long.</p>";
                    } else {
                        $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select error");
                        $row = mysqli_fetch_assoc($result);

                        if (is_array($row) && !empty($row)) {
                            $_SESSION['username'] = $row['Username'];
                            $_SESSION['fname'] = $row['Fname'];
                            $_SESSION['lname'] = $row['Lname'];
                            $_SESSION['email'] = $row['Email'];
                            $_SESSION['phone'] = $row['Tel_no'];
                            $_SESSION['id'] = $row['Id'];
                            $_SESSION['valid'] = true;
                            header("Location: profile.php");
                        } else {
                            header("Location: Logerrmessage.php");
                        }
                    }
                }
            }
        }
        ?>

        <header>Login</header>
        <form action="" method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Login" required>
            </div>

            <div class="links">
                Don't have an account? <a href="signup.php">Sign up</a>
            </div>
        </form>
        </div>
    </div>

</body>
</html>

<?php
include_once "footer.php";
?>
