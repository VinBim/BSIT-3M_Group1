<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Group Exercise #5</title>
		<link href="tp.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	  
		<script>
			$(document).ready(function(){
				$("#btn").click(function(){
				   $("#texto").load("pic.php", function(){
						alert("Hallooooo"); 
					});
				});
			});
		</script>
	</head>
	<body>
		<nav>
			<div class="navbar">
				<a href="home.php">Home</a>
				<a href="exercise1.php">Our Team</a>
				<a href="certif.htm">Certificates</a>
				<a href="port.htm">Portfolio</a>
				<a href="project.htm">Our Projects</a>
				<a href="merch.php">Merch</a>
				<a href="coms/contact.php">Contact Us</a>
				<a id="user" class="fa fa-user" href="auth/LOGIN HTML.php"></a>
			</div>
		</nav>
		
		<div class="header">
			<h1>The Start of Everything<br>ψ(๑`꒳´๑)ψ</h1>
		</div>
		
		<div class="container">
			<div id="texto">
				<h2>Sorry, please try again later.</h2>
				<img src="animation1.gif" class="gif" alt="this-content-is-not-available">
			</div>

			<button id="btn">Refresh</button>
		</div>
		
		<hr>
		
		<footer>
			<p style="margin-left:30px;color:#223030;"><small>Made by Abalain, Almaida, Catimbang, Cuaño & Morante 2024 © Copyright Intended</small></p>
		</footer>
	</body>
</html>
