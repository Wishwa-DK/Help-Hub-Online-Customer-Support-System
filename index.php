<!DOCTYPE html>
<html>
<head><title>Help Hub</title>
<link rel="stylesheet" href="styles\style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>




<body>
<section id="banner">

	<button onclick="document.location='login.php'" id = "lbtn"><i class="fa fa-user" aria-hidden="true"></i> Log in</button>
	<button onclick="document.location='signup.php'" id="Sbtn"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button><!--login button ek ebuwama login page ekata yanawa -->


    <div id ="sideNav">
	<nav>
	<ul>
	    <li><a href="index.php">HOME</a></li>
		<li><a href="profile.php">PROFILE</a></li>
		<li><a href="ticket.php">TICKET</a></li>
		<li><a href="ad.log.php">STAFF</a></li>
		<li><a href="sponsor.php">BECOME A SPONSER</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="php/logout.php">LOG OUT</a></li>
		
		
	</ul>
	</nav>
	</div>
	
	<div id="menubtn">
	<img src="images/menu.png" id="menu">
	</div>
		
	
	<script>
	
	
	var menubtn = document.getElementById("menubtn")
	var sideNav = document.getElementById("sideNav")
	var menu = document.getElementById("menu")
	
	sideNav.style.right = "-250px";//ara ekaparak ebuwata side menu eka ennathi eka haduwa
	
	menubtn.onclick = function()
	{
	if(sideNav.style.right == "-250px")
	{
		sideNav.style.right = "0";
		menu.src = "images/close.png";
	}
	
	else{
	
	sideNav.style.right = "-250px";
	menu.src = "images/menu.png";
	
	}
	
	}
	
</script>

	<div class="banner-txt">
<section>
	<h1>Help Hub</h1>
	<div class="banner-btn">
	<a href="aboutus.php"><span></span>About us</a>

	<a href="readmore.php"><span></span>Read More</a>
	</div>
	</div>
</section>


		<section id="feature">
		<div class="title-text">
		<br>	
		<h1> Why use us</h1>
		<br>
		<br>

		<h4>
		<p>"Choose our online customer support system for a seamless and efficient customer service experience.</p>
        <p>We prioritize your needs, offering timely assistance, expert guidance, and a user-friendly platform.</p>
        <p>With a commitment to excellence and a dedicated team, we are your trusted partner in addressing queries,</p>
		<p>resolving issues, and ensuring your satisfaction.Make us your first choice for superior</p>
        <p>support that makes a difference."</p>
		</h4>

		</div>
		</section>

		<?php
          include_once"feature.php";
        ?>



<footer>
	<div class="footer">
    <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="#">Shop</a>
        <a href="#">Blog</a>
    </div>
    <div class="col-2">
        <h3>NEWSLETTER</h3>
        <form>
            <input type="email" placeholder="Your Email address" required>
            <br>
            <button  type="submit">SUBSCRIBE NOW!</button>
        </form>
    </div>
    <div class="col-3">
	    <h3>CONTACT</h3>
	    <p>
            helphub345@gmail.com<br><br>
            +94 - 774938332<br><br>
            Sri Lanka.<br>
        </p>
        <div class="social-icons">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://lk.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>  
</div>
</footer>

<div class="footerBottom">
    <p>Copyright &copy;2022 Help Hub | Online Customer Support System</p>
</div>


	
	
	
	
</body>
</html>
	




