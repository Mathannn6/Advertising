<html>
<head>
<title>WOW</title>
<style>
body{
	background-image:url('');
	background-size:100% 100%;
	font-family:verdana;
	font-size:20px;
	margin:0;
	line-height:24px;
	top:0;	
}
.navbar{
	text-align:center;
	width:100%;
	background:#ffd030;
	height:100px;
	margin-top:0px;
	opacity:0.6;
	}
	
.navbar ul{
	margin:0;
	padding:0;
	color: red;
	list-style:none;
	position:absolute;
	}
	
.navbar ul li a{
	float:left;
	margin-top:30px;
	display:block;
	padding:25px;
	color:#12164e;
	text-decoration:none;
	width:200px;
	font-size:20px;
	text-align:center;
	padding:10px;
	border-radius:10px;
	font-family:century gothic;
	font-weight:bold;
	}
	
.navbar ul:after{
	content:"";clear:both;
	display:block;

	}
.navbar ul li{
	float:left;
	list-style:none;
}
.navbar ul ul{
	display:none;
	
}
.navbar ul li:hover >ul{
	display:block;
	}
.navbar ul li :hover {
	background:#ffd030;
	transititon:0.9s;
}
.navbar ul li:hover a{
	color:white;
}
.navbar ul ul:hover a{
	color:#9f1e37;
}

.navbar ul ul{
	background:#ffd030;
	padding:0;
	margin:0;
	position:absolute;
	top:100%;
	}
.navbar ul ul li{
	float:none;
	postition:absolute;
	
}

.navbar ul ul li a{
	padding:10px;
	color:#12164e;
	width:300px;
	text-align:left;
	
}
.navbar ul ul li a:hover{
	background:#12164e;
	color:white;
	transititon:0.9s;
}

#levForm {
  background-color:lightblue;
  color:black;
  margin: 50px auto;
  font-family: Raleway;
  padding: 40px;
  width: 40%;
  opacity:0.6;
  min-width: 300px;
  float:left;
}

h1 {
  text-align: center;  
}
</style>
</head>

<body><div class="navbar">
	<ul>
		<li><a href="m1.php">Home</a></li>

		<!---<li><a href=>BACK</a>//-->
		   
		   </ul>
	</div>
<?php
               
			   
$con=mysqli_connect("localhost","root","","myproject");
$x=$_GET["place"];
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
echo"<img class='mySlides w3-animate-fading' src=".$s2[0]." style='width:100%; height:450px;'>";
//echo"<option value='".$s2[0]."'>".$s2[0]."</option>";
}

 
      

        
            //<!--<img class="mySlides w3-animate-fading" src="20160515113945.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="yamaha-rd-350-1.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="20160702141322.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="20160511155616.jpg" style="width:100%; height:450px;">
            //<img class="mySlides w3-animate-fading" src="yamaha-rd-350-1.jpg" style="width:100%; height:450px;">//-->
        echo"</div>";    
        echo"</div>";
        
    
    
    




   echo"<script src='my_js/slide.js'></script>";
  echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
    echo"<script src='js/bootstrap.min.js'></script>";
echo"<table style='width:600px; margin:auto; color:blue; padding:5px;opacity:0.8;' border='1' cellpadding='5' cellspacing='3' bgcolor=#65efe2>";
$c=mysqli_connect("localhost","root","","myproject");
$query="select * from locations where id = '".$x."'";
$result=mysqli_query($c,$query);
while($row=mysqli_fetch_array($result))
{
//echo"<tr>";
echo"<h3><center>".$row['name']."</center><br>";
echo"<tr><td><h3>".$row['city']."</td>";
echo"<td><h3>".$row['street']."</td>";
echo"<td><h3>".$row['remark']."</td>";
echo"<td><h3>".$row['address']."</td>";

echo"</tr>";
}?></body>
</html>

		