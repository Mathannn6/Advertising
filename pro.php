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

						<!-- Logo 
							<h1 id="logo"><a href="index.html">SEARCH NEAR TO YOURS</a></h1>
							<p>FIND THE BEST WITH US</p>

						<!-- Nav -->
							<nav id="nav">
								<ul><?php
								$con=mysql_connect("localhost","root","");
                                mysql_select_db('myproject',$con);
                                 $z=$_POST["cars"];
//echo $z;//                          
                                   echo"<li><a class='icon solid fa-home' href=home.php><span><p style='text-align:right;'>"."HOME"."</p></span></a></li>";
								   echo"<li><a href=home.php><span>"."BACK"."</span></a></li><br>";
									echo"<li><a class='icon solid fa-home' href=index.php?place=hotel&name=".$z."><span>"."HOTELS"."</span></a></li>";
									echo"<li> <a href=index.php?place=restarunt&name=".$z."><span>"."RESTATRUNT"."</span></a></li>";
									echo"<li><a href=index.php?place=departmentals&name=".$z."><span>"."DEPARTMENTAL STORES"."</span></a></li>";
									echo"<li><a href=index.php?place=hospital&name=".$z." ><span>"."HOSPITAL AND CLINIC"."</span></a></li>";
									echo"<li><a href=index.php?place=faruniture&name=".$z." ><span>"."FURNITURE"."</span></a></li>";
									echo"<li><a href=index.php?place=meet&name=".$z." ><span>"."MEET SHOP"."</span></a></li>";
									echo"<li><a href=index.php?place=mobile&name=".$z."><span>"."MOBILES"."</span></a></li>";
									echo"<li><a href=class=icon fa-chart-bar><span>"."EDUCATION"."</span></a>";
										echo"<ul>";
										echo"<li><a href=index.php?place=tution&name=".$z."><span>"."TUTION CENTERS"."</span></a>";
										 echo"<ul>";
										 echo"<li><a href=index.php?place=hindi&name=".$z."><span>"."HINDI AND SPOKEN HINDI"."</span></a></li>";
				                           echo"<li><a href=index.php?place=tution&name=".$z."><span>"."ALL CLASS"."</span></a></li>";
				                          echo"<li><a href=index.php?place=specialtution&name=".$z."><span>"."10th 12th MATHS,PHYSICS,CHEMISTRY"."</span></a></li></ul></li>";
											echo"<li><a href=index.php?place=school&name=".$z."><span>"."SCHOOLS"."</span></a></li>";
											echo"<li><a href=index.php?place=college&name=".$z."><span>"."COLLEGES"."</span></a></li>";
											echo"<li><a href=index.php?place=institution&name=".$z."><span>"."INSTITUTIONS CENTERS"."</span></a></li>";
											echo"<li><a href=index.php?place=music&name=".$z." ><span>"."MUSIC AND DANCE"."</span></a></li>";
											echo"<li><a href=index.php?place=type&name=".$z."><span>"."TYPE WRITTING"."</span></a></li></ul></li>";
									echo"<li><a href=index.php?place=jewellary&name=".$z."><span>"."JEWALLARY"."</span></a></li>";
									echo"<li><a href='#'><span>"."OFFICES"."</span></a>";
									echo"<ul>";
									echo"<li><a href=index.php?place=auditor&name=".$z."><span>"."AUDITOR OFFICES"."</span></a></li>";
		                            echo"<li><a href=index.php?place=courier&name=".$z."><span>"."COURIER OFFICES"."</span></a></li>";
									echo"<li><a href=index.php?place=jothidam&name=".$z."><span>"."JOTHIDA NILAYAM"."</span></a></li>";
									echo"<li><a href=index.php?place=lawer&name=".$z."><span>"."LAWYER OFFICES"."</span></a></li>";
		                            echo"</ul></li>";
									 echo"<li><a href=index.php?place=trader&name=".$z."><span>"."TRADERS"."</span></a></li>";
        echo"<li><a href=index.php?place=travels&name=".$z." ><span>"."TRAVELS"."</span></a></li>";
        echo"<li><a href=index.php?place=agency&name=".$z."><span>"."INSUREANCE AGENCY"."</span></a></li>";
        echo"<li><a href=index.php?place=park&name=".$z."><span>"."PARKS AND  PLACE OF ENTERTAINMENTS"."</span></a></li>";
        echo"<li><a href=index.php?place=theatre&name=".$z."><span>"."THEATRES"."</span></a></li>";
        echo"<li><a href=index.php?place=construction&name=".$z."><span>"."CONSTRUCTORS"."</span></a></li>";
        echo"<li><a href=index.php?place=bakkery&name=".$z."><span>"."BAKKERY AND CAKE"."</span></a></li></span></ul>";


				?><!--<li><a href="#">OVERALL</a></li>
											<li><a href="#">THENI</a>
											<ul><li><a href='#'>PRODUCT BASED</a></li>
											<li><a href=l.php?place='theni'>LOCATION BASED</a></li>
											</ul></li>
											<li><a href="#">BODINAYAKANUR</a>
											<ul><li><a href='#'>PRODUCT BASED</a></li>
											<li><a href='#'>LOCATION BASED</a></li>
											</ul></li>
											
												<li><a href="#">PERIYAKULAM</a>
												<ul><li><a href='#'>PRODUCT BASED</a></li>
											<li><a href='#'>LOCATION BASED</a></li>
											</ul>
											</li>
											<li><a href="#">CUMBAM</a>
											<ul><li><a href='#'>PRODUCT BASED</a></li>
											<li><a href='#'>LOCATION BASED</a></li>
											</ul></li>
										</ul>
									</li>
									<li><a class="icon solid fa-user-secret" href="left-sidebar.html"><span>JOB WANTED</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>TODAY's SPECIAL</span></a></li>
									<li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span></span></a></li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							<h2>FOR TO ADVERTISE CONTACT: <strong>6382626946,9659864100</strong><br>WITH IN  24 HOURS WE WILL UPDATE YOUR DETAILS </h2>
						</header>
						<div class="row aln-center">
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>Okay, so what is this?</h3>
										</header>
										<p>This is <strong>Strongly Typed</strong>, a free, fully responsive site template
										by <a href="http://html5up.net">HTML5 UP</a>. Free for personal and commercial use under the
										<a href="http://html5up.net/license">CCA 3.0 license</a>.</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Nice! What is HTML5 UP?</h3>
										</header>
										<p><a href="http://html5up.net">HTML5 UP</a> is a side project of <a href="http://twitter.com/ajlkn">AJ’s</a> (= me).
										I started it as a way to both test my responsive tools and sharpen up my coding
										and design skills a bit.</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>What's this built with?</h3>
										</header>
										<p><strong>Responsive Tools</strong> is a simple set of tools for building responsive
										sites and apps. All of my templates at <a href="http://html5up.net">HTML5 UP</a> are built using these tools.</p>
									</section>

							</div>
							<div class="col-12">
								<ul class="actions">
									<li><a href="#" class="button icon solid fa-file">Tell Me More</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p> <strong>GET THE BEST</strong><br />
						 WHICH NEAR TO US</p>
					</div>
				</section>

			<!-- Main 
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content 
								<div id="content" class="col-8 col-12-medium">

									<!-- Post 
										<article class="box post">
											<header>
												<h2><a href="#">I don’t want to say <strong>it’s the aliens</strong> ...<br />
												but it’s the aliens.</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
											<h3>I mean isn't it possible?</h3>
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum eu malesuada in tristique.</p>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file">Continue Reading</a></li>
											</ul>
										</article>

									<!-- Post 
										<article class="box post">
											<header>
												<h2><a href="#">By the way, many thanks to <strong>regularjane</strong>
												for these awesome demo photos</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
											<h3>You should probably check out her work</h3>
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum malesuada.</p>
											<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat
											Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula
											vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet
											magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in,
											tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique
											at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna
											tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat
											magna tempus.</p>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file">Continue Reading</a></li>
											</ul>
										</article>

								</div>

							<!-- Sidebar 
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts --
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt --
														<article class="box excerpt">
															<header>
																<span class="date">July 30</span>
																<h3><a href="#">Just another post</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt --
														<article class="box excerpt">
															<header>
																<span class="date">July 28</span>
																<h3><a href="#">And another post</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt --
														<article class="box excerpt">
															<header>
																<span class="date">July 24</span>
																<h3><a href="#">One more post</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
											</ul>
										</section>

									<!-- Highlights --
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight --
														<article class="box highlight">
															<header>
																<h3><a href="#">Something of note</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight --
														<article class="box highlight">
															<header>
																<h3><a href="#">Something of less note</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic07.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
											</ul>
										</section>

								</div>

						</div>
					</div>
				</section>

			<!-- Footer --
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<a href="#" class="form-button-submit button icon solid fa-envelope">Send Message</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													1234 Somewhere Road<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon solid fa-phone">
													(000) 000-0000
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">info@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="#">@untitled</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="#">instagram.com/untitled</a>
												</li>
												<li class="icon brands fa-dribbble">
													<a href="#">dribbble.com/untitled</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="#">facebook.com/untitled</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
