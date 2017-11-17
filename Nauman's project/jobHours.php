<?php 
	
	//ECHO 'My name is Nauman';
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		
		<title>Job Hours</title>
		<?php include ('includes/head.php');?>
		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" href="css/home.css" class="css" /> 
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="ui/jquery.timepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="ui/jquery.timepicker.css" />
		
		
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$( "#datepicker" ).datepicker({
					dateFormat:"yy-mm-dd"
				});
				$( "#format" ).on( "change", function() {
					$( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
				});
			} );
		</script>
		<script type="text/javascript"> 
			$(document).ready(function (){
				//	alert('Hello world');
				$('#TIME').timepicker({ 'timeFormat': 'H:i:s' });
				$('#TIME2').timepicker({ 'timeFormat': 'H:i:s' });
				
				
			});
			
			
			
		</script>
	</head>
	<body>
		<?php include ('includes/menu.php');?>
		<br />
		<div class="container">
			<div class="jumbotron">
				<h1 class="display-5">Work Hours</h1>
				<p class="lead"></p>
				<hr class="my-4">
				<p></p>
				<form action="actions/hours.php" method="POST">
					<table>
						<tr>
							<td>Date</td>
							<td><input type="text" name="DA" id="datepicker" ></td>
						</tr>
						<tr>
							<td>Sign In Time</td>
							<td><input type="text" name="SIT" id="TIME" /></td>
						</tr>
						<tr>
							<td>Sign Out Time</td>
							<td><input type="text" name="SOT" id="TIME2" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Save" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php 
			if(isset($_GET['status']) && ($_GET['status']=="success")) 
			{
				
			?>
			<div class="container">
				<div class="alert alert-success" role="alert">
					You have successfully saved your time!
				</div>
				
			</div>
			
			<?php 
				
				}else {
				?>
					<div class="container">
				
					</div>
				
				<?php 
				
				
				
				
				
			}
			
		?>
		
		
	</body>
</html>

