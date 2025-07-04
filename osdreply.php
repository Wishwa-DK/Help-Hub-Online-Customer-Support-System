<?php
  include_once'header.php'
  ?>
<?php
     
    include 'osdreply.inc.php';
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agent.css">
    <link rel="stylesheet" href="styles/replyticket.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Reply ticket</title>
</head>
<body>

    <main>
        <p><h2><center>Reply Ticket</center><h2></p>
        <form class="ticket-form"  method="post">
            <input type="text" name="name" placeholder="Cutomername"><br>
            <input type="text" name="mail" placeholder="Customer e-mail"><br><br>
            <textarea name="message" placeholder="message"></textarea><br>
            <button type="submit" name="submit">Reply ticket</button>
           

        </form>
        <form class="ticket-form" action= "osdupdate.php" method="post">
            <input type="text" name="id" placeholder="ReplyId"><br>
            <input type="text" name="name" placeholder="Cutomername"><br>
            <input type="text" name="mail" placeholder="Customer e-mail"><br><br>
            <textarea name="message" placeholder="message"></textarea><br>
            <button type="Update" name="Update">Update</button>
           

        </form>
        <form class="ticket-form" action="osdDelete.php" method="post">
           <input type="text" name="name" placeholder="CutomerName"><br>
            <button type="Delete" name="Delete">Delete</button>
           

        </form>
        </main>
        <button><a href="osdticket.php">Back</a></button>
        <button><a href="osdindex.php">Home Page</a></button>
</body>
</html>
        <?php
         if(isset($_POST['submit']))
         {
           
             $username = mysqli_real_escape_string($conn,$_POST['name']);
             $useremail = mysqli_real_escape_string($conn,$_POST['mail']);
             $usermessage = mysqli_real_escape_string($conn,$_POST['message']);

             $sql = "INSERT INTO replytable(CustomerName,CustomerEmail,Customermessage) VALUES('$username','$useremail','$usermessage' )";

             if(mysqli_query($conn,$sql))
             {
                echo"Sucessfully Insered!";
             }
             else{
                echo"invaild...";
             }

         }
         
        
         include_once'footer.php'
         ?>
        
         

         