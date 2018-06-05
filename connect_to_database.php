<?php 
	


	try{
	$conn = new PDO("mysql:host=localhost; dbname=test_site_cc", 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	}catch(PDOException $errorMessage)
	{
		echo "Error".$errorMessage->getMessage();
	}
	


?>


