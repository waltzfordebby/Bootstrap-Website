<?php

		//PROJECT CONTENT

			if(isset($_POST['submit_project'])){




							$projectTitle       = $_POST['project_title'];
							$projectDescription = $_POST['project_description'];
				
						


							// FOLDER FOR THE IMAGES						
							$folder ="projectImage/"; 
							
							//GET THE FILE NAME
							$projectImage = $_FILES['project_image']['name']; 
							
							//DECLARE THE PATH OF THE PHOTO
							$path = $folder . $projectImage ; 
							
							// GET THE NAME OF THE PHOTO
							$target_file=$folder.basename($_FILES["project_image"]["name"]);

							//GET THE FILE EXTENSION OF THE PHOTO							 
							$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

							//ALLOWED EXTENSION OF THE PHOTO					 
							$allowed=array('jpeg','png' ,'jpg'); 
							
							//THE FILENAME OF THE PHOTO
							$filename=$_FILES['project_image']['name']; 
							
							//GET THE FILE EXTENSION OF THE PHOTO
							$ext=pathinfo($filename, PATHINFO_EXTENSION);
							
							//IF THE EXTENSION IS NOT ALLOWED ECHO THE SCRIPT
							if(!in_array($ext,$allowed) ) 

							{ 
							
								echo '<script>';
								echo 'alert("Sorry, only JPG, JPEG, PNG & GIF  files are allowed.")';
								echo '</script>';

						

							}
							// IF THE PHOTO EXTENSION IS ALLOWED UPLOAD THE FILE TO THE PATH
							
							else{ 

								
							// UPLOAD THE FILE
							move_uploaded_file( $_FILES['project_image'] ['tmp_name'], $path); 



							//INSERT THE DATA FROM FROM TO DATABASE
							$addcontent = $conn->query("INSERT INTO project_content (projectImage, projectTitle, projectDescription) VALUES ('$projectImage','$projectTitle',
								'$projectDescription')");

							echo '<script>';
							echo 'alert("Project Succesfully Added")';
							echo '</script>';

							unset($projectTitle );
							unset($projectDescription);
							unset($projectImage);




								
							



						}
					}

	?>



	<?php

	//POST CONTENT

			if(isset($_POST['submit_post'])){




							$postTitle       = $_POST['post_title'];
							$postContent = $_POST['post_content'];
							$postDate = date("M jS, Y");

				
						


							// FOLDER FOR THE IMAGES						
							$folder ="postImage/"; 
							
							//GET THE FILE NAME
							$postImage = $_FILES['post_image']['name']; 
							
							//DECLARE THE PATH OF THE PHOTO
							$path = $folder . $postImage ; 
							
							// GET THE NAME OF THE PHOTO
							$target_file=$folder.basename($_FILES["post_image"]["name"]);

							//GET THE FILE EXTENSION OF THE PHOTO							 
							$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

							//ALLOWED EXTENSION OF THE PHOTO					 
							$allowed=array('jpeg','png','jpg','JPG','JPEG'); 
							
							//THE FILENAME OF THE PHOTO
							$filename=$_FILES['post_image']['name']; 
							
							//GET THE FILE EXTENSION OF THE PHOTO
							$ext=pathinfo($filename, PATHINFO_EXTENSION);
							
							//IF THE EXTENSION IS NOT ALLOWED ECHO THE SCRIPT
							if(!in_array($ext,$allowed) ) 

							{ 
							
								echo '<script>';
								echo 'alert("Sorry, only JPG, JPEG, PNG files are allowed.")';
								echo '</script>';

						

							}
							// IF THE PHOTO EXTENSION IS ALLOWED UPLOAD THE FILE TO THE PATH
							
							else{ 

								
							// UPLOAD THE FILE
							move_uploaded_file( $_FILES['post_image'] ['tmp_name'], $path); 


							


							//INSERT THE DATA FROM FROM TO DATABASE
							$addcontent2 = $conn->query("INSERT INTO post_content (postImage, postTitle, postContent, postDate) VALUES ('$postImage','$postTitle','$postContent','$postDate')");

							unset($postImage );
							unset($postTitle);
							unset($postDescription);




							echo '<script>';
							echo 'alert("Post Succesfully Added")';
							echo '</script>';

						




						}
					}

	?>