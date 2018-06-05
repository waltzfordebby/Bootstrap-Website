<?php 

include 'connect_to_database.php';


    $projectList = $conn->query("SELECT * FROM project_content ");
	
	while($row=$projectList->fetch()){
		
		$projectImageOutput = $row['projectImage'];
		$projectTitleOutput = $row['projectTitle'];
		$projectDescriptionOutput = $row['projectDescription'];


								echo ' <div class="col-md-4">
						            	<div class="card mb-4 box-shadow">
						            		<img class="card-img-top" src="projectImage/'.$projectImageOutput.'"  style="height: 225px; width: 100%; display: block;">
						            		<div class="card-body">
						            			<strong class="d-inline-block mb-2 text-primary">'.$projectTitleOutput.'</strong>
						            			<p class="card-text text-muted">'.$projectDescriptionOutput.'</p>
						            			<div class="d-flex justify-content-between align-items-center">
						            			</div>
						            		</div>
						            	</div>
						            </div>';

	}
	
?>