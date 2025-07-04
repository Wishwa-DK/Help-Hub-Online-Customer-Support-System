<?php
include_once"header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="styles/1style.css">
    <title>Sponsor Packages</title>
</head>
<body>
    <header>
        <h1>Welcome to  Sponsorship Page<br>Advertise with Help Hub</h1>
    </header>
	<br>
	<h3>Choose a Plan</h3>
    <main>
		
		
        
		<div class="premium">
        <div class="package platinum">
            <h2>Platinum Package</h2>
            <p>Price: Rs. 5000.00/month</p>
            <a href="payment.php">  <button id="platinumBtn" class="buy-button">Buy Now</button></a>
        </div>
        <div class="package gold">
            <h2>Gold Package</h2>
            <p>Price: Rs. 3000.00/month</p>
            <a href="payment.php"><button id="goldBtn" class="buy-button">Buy Now</button></a>
        </div>
        <div class="package silver">
            <h2>Silver Package</h2>
            <p>Price: Rs. 2000.00/month</p>
            <a href="payment.php"><button id="silverBtn" class="buy-button">Buy Now</button></a>
        </div>
</div>
    </main>
	<h3>We getting more Benifit for Sponsors</h3>
	<br>
    <script src="javascript/script.js"></script>
</body>
</html>

<?php
include_once"footer.php";
?>
