<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>RMA Generator</title> 
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div id="wrapper">
		<div class="join">Generate an RMA</div>
		<div class="lock"><img src="logo2.png" width="50px"></div>
		<div class="clr"></div>
		<div class="login-options">A RMA is return merchandise authorization number</div>
		<?php
			if(isset($_POST['submit']))
			{
				$today = date('mdHis');
				$startDate = date('mdHis', strtotime('-20 days'));
				$range = $today - $startDate;
				$rand = rand(0, $range);
				echo '<div class="join">'.($startDate + $rand).'</div>';
			}
		?>
		<br><br><br><br>
		<div class="clr"><hr /></div>
			<div class="forms">
				<form method="post" action="index.php">				
					<button type="submit" name="submit" class="btn btn-primary">Generate RMA</button>
					<br><br>
					<small>This will generate a "Random" RMA but uses dates and time to ensure there are no duplicates</small>
				</form>
			</div>
		</div>
		<div class="footer">2016 - Developed By Wayne Shears</div>    
  </body>
</html>
