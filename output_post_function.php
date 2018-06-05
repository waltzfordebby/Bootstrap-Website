<?php 

include 'connect_to_database.php';


    $postList = $conn->query("SELECT * FROM post_content ");
	
	while($row=$postList->fetch()){
		
		$postImageOutput = $row['postImage'];
		$postTitleOutput = $row['postTitle'];
		$postContent = $row['postContent'];
		$postDate = $row['postDate'];


						echo '<div class="col-md-12">
								          <div class="card flex-md-row mb-4 box-shadow h-md-250">
								          	<img class="card-img-left align-middle" src="postImage/'.$postImageOutput.'"  style="height: 230px; width: 40%; display: block;">
								            <div class="card-body d-flex flex-column align-items-start">
								              <strong class="d-inline-block mb-2 text-primary">'.$postTitleOutput.'</strong>
								              <h3 class="mb-0">
								                <a class="text-dark" href="#">'.$postTitleOutput.'</a>
								              </h3>
								              <div class="mb-1 text-muted">'.$postDate.'</div>
								              <p class="card-text mb-auto">'.$postContent.'
								              </p>
								              <a href="#">Continue reading</a>
								            </div> 
								          </div>
								    </div>';

	}
	
?>