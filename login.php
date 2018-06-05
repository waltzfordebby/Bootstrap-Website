<!DOCTYPE HTML>
<html>
<head> 

	<?php
	
	include 'connect_to_database.php';

	session_start();

	?>
	

	<title>Admin Login</title>

	<!--META DATAS-->
	<meta charset="UTF-8">
	<meta name="description" content="Admin Login Page">
	<meta name="keywords" content="Admin, Login, Add Content">
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

<body class="text-center login-body">

	<?php 
	
	if(isset($_SESSION['test_site_username']))
	{

		header('location:dashboard.php');
	}


	if(isset($_POST['submit'])){

		$Username = $_POST['username'];
		$Password = $_POST['password'];

		$test_db = $conn->query("SELECT * FROM admin_account WHERE userName='$Username' and passWord='$Password' ");


		$row = $test_db->fetch();

		if(($Username==$row['userName']) && ($Password==$row['passWord'])){

						$_SESSION['test_site_username'] = $row['userName'];
						header('location:dashboard.php');
						
		}else{

			echo '<script>';
			echo 'alert("Incorrect Username or Password!")';
			echo '</script>';
		}

	}

?>







 
	<form class="form-signin form-container" method="POST" action="">

		  <div class="login-image mx-auto"></div>
	      <h1 class="h3 mb-3 font-weight-normal">Admin Login</h1>
	      <label for="inputEmail" class="sr-only">Username</label>
	      <input id="inputEmail" name="username" class="form-control" placeholder="Username"  autofocus="" type="text" required>
	      <label for="inputPassword" class="sr-only">Password</label>
	      <input id="inputPassword" name="password" class="form-control" placeholder="Password"  type="password" required>
	      <div class="checkbox mb-3">
	        <label>
	          <input value="remember-me" type="checkbox"> Remember me
	        </label>
	      </div>
	      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
	      <p class="mt-5 mb-3 text-muted">©2018</p>

    </form>
  
</body>
</html>