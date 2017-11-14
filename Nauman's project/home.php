<?php 
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		
		<title>website</title>
		<?php include ('includes/head.php');?>
		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" href="css/home.css" class="css" /> 
		
	</head> 
	<body>
		<?php include ('includes/menu.php');?>
		<br/>
		
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-8 col-sm-9 col-xs-10">
						<h1>This is my personal website</h1>
						<p class="lead">It includes all my personal stuff.</p>
						<input type="button" class="btn btn-primary" value="Login"  href="login.php"/>
					</div>
					<div class="col-md-4 col-sm-3 col-xs-2">
					<img src="images/n.jpg"  class="img-fluid float-right" alt="" />
					</div>
				</div>
				
			</div>
			<br />
			<div class="row">
			<div class="col-md-4">
				<h2>Goals</h2>
				<p>Priorities your goals. Start with the most important and keep yourself pushing till the end of the day. </p>
				<a href="#" class="btn btn-primary">Reset Goals</a>
			</div>
			<div class="col-md-4">
			<h2>Tasks to do</h2>
				<p class="text-justify">accines have reduced and, in some cases, eliminated many diseases that killed or severely disabled people just a few generations ago.</p>
				<a href="toDoList.php" class="btn btn-primary">Reset Tasks</a>

			</div>
			<div class="col-md-4">
			<h2>Expenses</h2>
				<p class="text-justify" >Many vaccines can also protect when administered after exposure – examples are rabies, hepatitis B, hepatitis A, measles and varicella</p>
				<a href="#" class="btn btn-primary">View Expenses </a>
	
			</div>
			</div>
		</div>
		
		<!-- <script type="text/javascript"><?php include ('includes/home.js');?></script> -->
		
	</body>
</html>
