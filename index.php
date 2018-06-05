<!DOCTYPE HTML>
<html>
<head> 
	

	<title> Christian Cayabyab </title>

	<!--META DATAS-->
	<meta charset="UTF-8">
	<meta name="description" content="My test website">
	<meta name="keywords" content="Christian,Cayabyab,Test,Exam,June 5">
	<meta name="author" content="Christian Lester B. Cayabyab">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">



	<!--EXTERNAL STYLESHEET && FAVICON-->
	<link rel="stylesheet" type="text/css" href="stylesheet/external_stylesheet.css">
	<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16"> 

	<!--EXTERNAL SCRIPTS -->
	<script language="JavaScript" type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/external_script.js"></script>
	


	<!--BOOTSTRAP CSS && FONTAWESOME CSS-->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

	<!--BOOTSTRAP JAVASCRIPT AND JQUERY-->
	<script type="text/javascript" src="bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"></script>
	<script type="text/javascript" src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

	

  


</head>
<body>

	<!--HEADER-->
	<header class="border border-top-0 border-right-0 border-left-0">	

		<div class="container">

			<div class="page-header p-4">

				<div class="row">

					<div class="col-sm-6 text-center respon-add-height" >

						<a href="#"> <div class="h-100 logo"></div></a>

					</div>

					<div class="col-sm-6">

						<nav class="navbar navbar-expand-md navbar-collapse navbar-light respon-float-right">

							<button class="navbar-toggler text-right " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    							<span class="navbar-toggler-icon"></span>
						   </button>

	  							<div class="collapse navbar-collapse"  id="collapsibleNavbar">

									<ul class="navbar-nav mx-auto nav-font">
										<li class="nav-item active"><a  class="nav-link no-outline" href="#">Portfolio</a></li>
										<li class="nav-item"><a class="nav-link no-outline" href="#aboutAnchor">About me</a></li>
										<li class="nav-item"><a class="nav-link no-outline"  href="mailto:lslestercayabyab@gmail.com">Contact me</a></li>
									</ul>	

								</div>

						</nav>

					</div>

				</div>

			</div>

		</div>

	</header>
	<!---////-->

	<!--MAIN CONTENT-->
	<main>

		<!--INTRODUCTION SECTION-->
		<section class="mb-5">

			<div class="container">

				<div class="row m-5">

					<div class="col-lg-12 mt-5 mb-4">
						
						<h1 class="jumbotron-heading text-center">I'm a Web Designer / Developer based in Philippines </h1>

					</div>

					<div class="col-sm-12">

						<div class="col-sm-8 mx-auto">

							<!--<p class="text-center"> Hi, my name is Christian Lester B. Cayabyab and I'm a fresh graduate of Bicol University Polangui campus. I studied Bachelor of science in Information Technology because whene I was a kid I was fascinated and intrigue how computer works. Now a days a lot of task can be done fast using computers. </p>-->

							<p class="text-center lead text-muted"> This is a Photoshop's version of Lorem Impsum. Prion gravida nibh vel velit auctor aliquet. Aenean sollicitudi, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p> 

						</div>

						<div class="col-sm-12 text-center mt-5 mb-5">
							
							<a href="mailto:lslestercayabyab@gmail.com" target="_blank" class="btn btn-dark" role="button">Hire Me</a>

						</div>

					</div>

				</div>

			</div>
			
		</section>
		<!--//// -->

		<!--MY LATEST PROJECT SECTION-->
		<section class="border border-bottom-0 border-right-0 border-left-0">


			<!--MY LATEST PROJECT HEADER-->
			<div class="container">

				<div class="row">

					<div class="col-sm-7 text-center mt-5 mb-4">
						<h2> My Latest Project </h2>
					</div>

				</div>
			</div>

			<!--MY LATEST PROJECT COTENT-->
			<div class="container mx-auto mt-5">

				<div class="col-lg-8 mx-auto">

							  <div class="row">
							  	
							  	<?php include 'output_project_function.php' ?>
		  		
							</div>

			</div>
				
		</section>
		<!--//// -->



		<!--ABOUT ME && WHAT'S NEW SECTION-->
		<section class="bg-light">


			<div class="container mt-5" id="aboutAnchor">

				<div class="row ">

						<aside class="col-sm-6 mt-5" >
					
							<h2 class="text-center"> About Me </h2>
									
									<div class="col-sm-7 float-right">

										<p>This is a Photoshop's version of Lorem Impsum. Prion gravida nibh vel velit auctor aliquet. Aenean sollicitudi, 	lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p> 

									</div>
									
									<div class="col-sm-7 float-right">

										<p>This is a Photoshop's version of Lorem Impsum. Prion gravida nibh vel velit auctor aliquet. Aenean sollicitudi, 	lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p> 

									</div>

									<div class="col-sm-7 float-right">

										<ul class="navbar navbar-expand-md navbar-collapse navbar-nav " >
											<li class="p-2"> <a class="text-dark" href="#"><i class="fab fa-facebook-square fa-lg"></i></a></li>
											<li class="p-2"> <a class="text-dark" href="#"> <i class="fab fa-twitter fa-lg"></i> </a></li>
											<li class="p-2"> <a class="text-dark" href="#"> <i class="fab fa-google-plus fa-lg"></i></a> </li>
										</ul>

									</div>
							
					    </aside>

					

						<aside class="col-sm-6 mt-5 ">

							<h2> What's New? </h2>

								<?php include 'output_post_function.php' ?>
						</aside>

				</div>

			</div>

		
				
		</section>
		<!--//// -->

	</main>
	<!--////-->
 	
	<!--FOOTER SECTION-->
 	<footer>

 		<div class="container">

			<div class="page-footer p-4">

				<div class="row">

					<div class="col-sm-6 text-center">
						<p class="p-3">Copyright 2018 <a class="text-dark" href="#">@ChristianC.com</a></p>
					</div>

					<div class="col-sm-6">

						<nav class="navbar navbar-expand-md navbar-collapse">
								<ul class="navbar-nav mx-auto">
									<li class="nav-item"><a class="nav-link text-dark" href="#">Portfolio</a></li>
									<li class="nav-item"><a class="nav-link text-dark" href="#">About me</a></li>
									<li class="nav-item"><a class="nav-link text-dark" href="#">Contact me</a></li>
								</ul>	
						</nav>

					</div>

				</div>

			</div>

		</div>

 	</footer>
 	<!--////-->







</body>
</html>