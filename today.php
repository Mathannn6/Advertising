<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SEARCH NEAR TO YOURS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">TODAY'S OFFER</a></h1>
							<p> </p>

						<!-- Nav -->
							<?php
               
			   
$con=mysqli_connect("localhost","root","","myproject");
$x=$_GET["palce"];
//echo $x;
$s="select filename from img_upload where id='".$x."'";
//echo $s;
//echo"<select name='"."cars"."'>";
$s1=mysqli_query($con,$s);
echo"<div class='jumbotron'>";
       echo"<div class='w3-content w3-section'>";
while($s2=mysqli_fetch_array($s1))
{
	//echo $s2[0];
echo"<center><img class='mySlides w3-animate-fading' src=".$s2[0]." style='width:75%; height:450px;'><center>";
//echo"<option value='".$s2[0]."'>".$s2[0]."</option>";
}

 
      

        
            //<!--<img class="mySlides w3-animate-fading" src="20160515113945.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="yamaha-rd-350-1.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="20160702141322.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="20160511155616.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="yamaha-rd-350-1.jpg" style="width:100%; height:450px;">//-->
        echo"</div>";    
        echo"</div>";
        
    
    
    




   //echo"<script src='my_js/slide.js'></script>";
  //echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
   // echo"<script src='js/bootstrap.min.js'></script>";
//echo"<table style='width:100px; margin:auto; color:blue; padding:5px;opacity:0.8;' border='1' cellpadding='5' cellspacing='3' bgcolor=#65efe2>";
//$c=mysqli_connect("localhost","root","","myproject");
//$query="select * from locations where id = '".$x."'";
//$r

?></body>
</html>

		
							



			<!-- Banner 
				<section id="banner">
					<div class="container">
						<p> <strong>GET THE BEST</strong><br />
						 WHICH NEAR TO US</p>
					</div>
				</section>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>