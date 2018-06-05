<!DOCTYPE HTML>
<html>
<head> 

	<?php

		include 'connect_to_database.php';
		include 'upload_function.php';
		include 'count_function.php';

		session_start();


	?>


	<title>Admin Dashboard</title>

	<!--META DATAS-->
	<meta charset="UTF-8">
	<meta name="description" content="Admin Dashboard Page">
	<meta name="keywords" content="Admin, Dashboard, Add Content">
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



	<div class="container">

		<div class="page-header">



			<div class="col-sm-12 text-center respon-add-height" >

						<a href="#"> <div class="logo-admin"></div></a>
			
			</div>

			<form class="col-sm-12 text-center p-2" method="POST" action="">

					<a href="logout.php"><button  type="button" class="btn btn-danger" name="logout_button"><i class="fas fa-power-off "></i> Logout</button></a>

			</form>



		</div>




		<!--TABS-->
		<div class="col-sm-8 mx-auto mt-4 ">

			<ul class="nav nav-tabs" role="tablist ">

				<li class="nav-item">
					<a class="nav-link text-dark  active" data-toggle="tab" href="#home">Summary</a>
				</li>

				<li class="nav-item">
					<a class="nav-link text-dark" data-toggle="tab" href="#menu1">Add Project</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link text-dark" data-toggle="tab" href="#menu2">Add Post</a>
				</li>
				
			</ul>


			<div class="tab-content">

				<div id="home" class="container tab-pane active mt-5">

					<div class="row">
					
						<div class="col-md-6" >

							<h4 class="text-center mt-3">Number of Added Projects</h4>

							<div class="col-md-3 mx-auto">


								<h1><?php echo $count_all_projects ?></h1>


							</div>


						</div>

						<div class="col-md-6">


							<h4 class="text-center mt-3">Number of Added Post</h4>


							<div class="col-md-3 mx-auto">


								<h1><?php echo $count_all_post ?></h1>


							</div>

						</div>

					</div>
				
				</div>


				<div id="menu1" class=" container tab-pane fade">

									<div class="col-md-12 mt-5">

								    
								          	<form class="card flex-md-row mb-4 box-shadow h-md-250" method="POST" action="" enctype="multipart/form-data">

								          	<div class="align-middle mt-5">
									          	<div class="card-img-left upload-background-image overflow-hidden" id="project_image">
									          		<input class="upload-button cursor-pointer" type="file" name="project_image" id="project_image_upload" />
									          	</div>
								          	</div>

								            <div class="card-body d-flex flex-column align-items-start col-md-6" >

								                <div class="form-group">
												 <label for="usr">Project Title</label>
												  <input id="inputEmail" type="text" class="form-control" name="project_title" placeholder="Enter project title" required>
												</div>

												<div class="form-group">
												  <label for="pwd">Project Description</label>
												  <textarea class="form-control" name="project_description" placeholder="Enter project description" rows="5" id="comment" required></textarea>
												</div> 

													<button type="submit" name="submit_project" class="btn btn-primary">Submit</button>
								            </div> 

								       			

								        </form>

								          
								    </div>
				</div>

				<div id="menu2" class="container tab-pane fade">

						<div class="col-md-12 mt-5">

								          <form class="card flex-md-row mb-4 box-shadow h-md-250" method="POST" action="" enctype="multipart/form-data">

								          	<div class="align-middle mt-5">
									          	<div class="card-img-left upload-background-image overflow-hidden" id="post_image">
									          		<input class="upload-button cursor-pointer" type="file" name="post_image" id="post_image_upload"/>
									          	</div>
								          	</div>

								           <div class="card-body d-flex flex-column align-items-start col-md-6" >

								                <div class="form-group">
												 <label for="usr">Post Title</label>
												  <input type="text" class="form-control" name="post_title" placeholder="Enter post title" id="usr">
												</div>

												<div class="form-group">
												  <label for="pwd">Post Content</label>
												  <textarea class="form-control" rows="5" name="post_content" placeholder="Enter post content" id="comment"></textarea>
												</div> 

												<button type="submit" name="submit_post"  class="btn btn-primary">Submit</button>

								            </div> 



								        </form>

								    </div>
				</div>



			


			</div>

		</div>
		<!--///-->
	</div>
	

</body>
</html>