<?php
	include('dbcon.php');
	include('session.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 1000000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location="upload/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$content=$_POST['content'];
									$time=time();
									$id = $_SESSION['id'];
									
									$update=$conn->query(" INSERT INTO post (user_id,post_image,content,created)
									VALUES ('$id','$location','$content','$time') ");

									}
										header('location:home.php');
									
									
									}
							}
?>