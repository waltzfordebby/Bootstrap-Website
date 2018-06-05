<?php 

include 'connect_to_database.php';


    $projectList = $conn->query("SELECT * FROM project_content ");
	
	while($row=$projectList->fetch()){
		
		$projectImageOutput = $row['projectImage'];


	}
	
?>