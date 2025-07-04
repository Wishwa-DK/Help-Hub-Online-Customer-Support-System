<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles\style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

<button id="changeProfileBtn" onclick="document.location='edit.php'">
  <i class="fa fa-user-cog" aria-hidden="true"></i> Update Profile
</button>

    <div id ="sideNav">
	<nav>
	<ul>
	    <li><a href="index.php">HOME</a></li>
		<li><a href="profile.php">PROFILE</a></li>
		<li><a href="ticket.php">TICKET</a></li>
		<li><a href="ad.log.php">STAFF</a></li>
		<li><a href="sponsor.php">BECOM A SPONSER</a></li>
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
