<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Name
							</div>
							<!--<div class="cell">
								CITY
							</div>-->
							<div class="cell">
								STEET
							</div>
							<div class="cell">
								ADDRESS
							</div>
							<div class="cell">
								VIEW
							</div>
						</div>
<?php
if($_GET)
{
$con=mysqli_connect("localhost","root","","myproject");
$x=$_GET["place"];
$y=$_GET["name"];
//echo $y;
if(!$con)
{
echo"database connection failed";
}
$query="select * from locations where product = '".$x."' and street='".$y."'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
						echo"<div class='row'>";
							echo"<div class='cell' data-title='NAME'>".$row['name']."</div>";
							//echo"<div class='cell' data-title='CITY'>".$row['city']."</div>";
							echo"<div class='cell' data-title='STREET'>".$row['street']."</div>";
							echo"<div class='cell' data-title='ADDRESS'>".$row['address']."</div>";
							echo"<div class='cell' data-title='VIEW'><a href=slide.php?place=".$row['id'].">"."click to view"."</a></div>";	
						echo"</div>";
}
}						
	?>					

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>