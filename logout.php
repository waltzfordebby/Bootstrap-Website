<!--FOR LOGOUT SESSIONS-->
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php


if(isset($_SESSION['test_site_username'])){
	
	unset($_SESSION['test_site_username']);
	header('location:login.php');


}



?>



</body>
</html>
