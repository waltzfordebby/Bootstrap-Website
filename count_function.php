<?php 

		$projectList = $conn->query("SELECT * FROM project_content");
		$count_all_projects = $projectList -> rowCount();

		$postList = $conn->query("SELECT * FROM post_content");
		$count_all_post = $postList -> rowCount();
?>


