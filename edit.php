<?php
include_once "header.php";
?>

<?php
session_start();

include("php/config.php");
if (isset($_POST['valid'])) {
    header("Location: index.php");
}

// Define validation variables and initialize error array
$errors = [];

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['Password']);
    $username = mysqli_real_escape_string($con, $_POST['username']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "*Invalid email format.";
    }

    // Validate password (you can add more criteria)
    if (strlen($password) < 8) {
        $errors[] = "*Password must be at least 8 characters long.";
    }

    // Validate username (you can add more criteria)
    if (empty($username)) {
        $errors[] = "*Username is required.";
    }

    if (empty($errors)) {
        // No validation errors, proceed with the update
        $id = $_SESSION['id'];
        $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Password='$password' WHERE Id = $id ") or die("error occurred.");

        if ($edit_query) {
            echo "<script>alert('Your profile has been updated');</script>";
            header("Location: profile.php");
            exit();
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update profile</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

<div class="container">
    <div class="box form-box">
        <?php
        $id = $_SESSION['valid'];

        $query = mysqli_query($con, "SELECT * FROM users WHERE Id = $id");

        if (mysqli_num_rows($query) > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_password = $result['Password'];
            }
        } else {
            // No user found with the given ID.
        }
        ?>
        <header>Update Profile</header>
        <form action="" method="post">

            <div class="field input">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" value="<?php echo isset($res_Email) ? $res_Email : ''; ?>"
                       autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="phone">Password</label>
                <input type="Password" name="Password" id="Password"
                       value="<?php echo isset($res_password) ? $res_password : ''; ?>" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username"
                       value="<?php echo isset($res_Uname) ? $res_Uname : ''; ?>" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Update" required>
            </div>

        </form>
    </div>
</div>
</body>
</html>

<?php
include_once "footer.php";
?>
