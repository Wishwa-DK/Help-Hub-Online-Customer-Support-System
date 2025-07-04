<?php
include_once"header2.php";
?>

<?php 

session_start();
include("php/config.php");

if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Redirect to the login page
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles\login.css ">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="index.php">Help Hub</a></p>
        </div>
    
    <div class="right-links">

        <?php

          $id = $_SESSION['id'];
          $query = mysqli_query($con,"SELECT*FROM users WHERE id = $id");
          

          while ($result = mysqli_fetch_assoc($query)) {
            $res_Uname = $result['Username'];
            $res_Email = $result['Email'];
            $res_Fname = $result['Fname'];
            $res_Lname = $result['Lname'];
            $res_Tel_no = $result['Tel_no'];
            $res_Password = $result['Password'];
            $res_id = $result['Id'];
          }



        ?>


    </div>
    </div>

    <div class="box_top">
        <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
    </div>

    <main>
        <div class="main-box top">
            <div class="top">

                <div class="box">
                    <p>Your email is <b><?php echo $res_Email ?></b>.</p>
                </div>

                <div class="box">
                    <p>And your password is <b><?php echo $res_Password ?></b></p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

<?php
include_once"footer.php";
?>
