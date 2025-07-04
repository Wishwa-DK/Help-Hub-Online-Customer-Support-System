<?php
  include_once'header.php'
?>

<?php
$host = "localhost";
$user = "root";
$password="";
$db="customer_support_system";

$data = mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection_error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["name"];
    $password=$_POST["password"];

    $sql="select * from alogin where username='".$username."' AND password='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="admin")
    {
        header("Location: AdminP.php");
    }

    elseif($row["usertype"]=="support Agent")
    {
        header("Location: osdindex.php");
    }
    elseif($row["usertype"]=="sponsor")
    {
        header("Location: thariindex.php");
    }
    else {
        header("Location: Stafferrmessage.php");
    }

        
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

    <div class="container">
        <div class="box form-box">

       

            <header>Staff Login</header>
            <form action="ad.log.php" method="post">
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="email" required placeholder="Admin / Support Agent / Sponsor">
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                
            </form>
        </div>
       
    </div>
    
</body>
</html>

<?php
  include_once'footer.php'
?>

