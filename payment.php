<?php
include_once"header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="styles/2style.css">
    <title>Sponsor Payment</title>
</head>
<body>
    <header>
      <style>
    header {
    background-color: #333;
    color: white;
    padding: 20px;
}
      </style>
        <h1>Help Hub Sponsor Payment Page</h1>
    </header>
    <div class="row">
  <div class="col-75">
    <div class="container">
    <form action="payment.php" method="POST">
  <div class="row">
    <div class="col-50">
      <h3>Sponsorship Details</h3>
      <label for="name">Full Name</label>
      <input type="text" name="name" placeholder="Full Name">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="Email">
      <label for="telNo">Tel-No</label>
      <input type="text" name="telNo" placeholder="Tel-No">
      <label for="package">Sponsorship Package</label>
      <input type="radio" name="package" value="Silver package" id="silver">
      <label for="silver">Silver package</label>
      <input type="radio" name="package" value="Gold package" id="gold">
      <label for="gold">Gold package</label>
      <input type="radio" name="package" value="Platinum package" id="platinum">
      <label for="platinum">Platinum package</label>
    </div>

    <div class="col-50">
      <label for="cardname">Name on Card</label>
      <input type="text" name="cardname" placeholder="John More Doe">
      <label for="cardnumber">Credit card number</label>
      <input type="text" name="cardnumber" placeholder="1111-2222-3333-4444">
      <label for="expmonth">Exp Month</label>
      <input type="text" name="expmonth" placeholder="September">
      <div class="row">
        <div class="col-50">
          <label for="expyear">Exp Year</label>
          <input type="text" name="expyear" placeholder="2018">
        </div>
        <div class="col-50">
          <label for="CCV">CVV</label>
          <input type="text" name="CCV" placeholder="352">
        </div>
      </div>
    </div>
  </div>
  <input type="submit" name="submit"value="Submit" class="btn">
</form>

<?php
  include_once('payment.inc.php');

if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $TelNo=mysqli_real_escape_string($con,$_POST['telNo']);
    $package=mysqli_real_escape_string($con,$_POST['package']);
    $cname=mysqli_real_escape_string($con,$_POST['cardname']);
    $cardN=mysqli_real_escape_string($con,$_POST['cardnumber']);
    $em=mysqli_real_escape_string($con,$_POST['expmonth']);
    $ey=mysqli_real_escape_string($con,$_POST['expyear']);
    $CVV=mysqli_real_escape_string($con,$_POST['CCV']);


   
    $sql = "INSERT INTO sponsor(fName,email,telNo,package,nameC,creditN,eM,eY,cvV) VALUES('$name','$email','$TelNo','$package','$cname','$cardN','$em','$ey','$CVV')"; 

    if(mysqli_query($con,$sql)){
    header("payment.php");
    echo "Successfully Insered";
    
} else{
  echo"invalid . . .";
}
}

?>
    <script src="js/1script.js"></script>
</body>
</html>

<?php
include_once"footer.php";
?>
