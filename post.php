<?php
	include('dbcon.php');
	include('session.php');
	$content = $_POST['content'];
	if (!isset($_FILES['image']['tmp_name']))
	{
		echo "";$location = "";
	}
	else
	{
		$file=$_FILES['image']['tmp_name'];
		$image = $_FILES["image"] ["name"];
		$image_name= addslashes($_FILES['image']['name']);
		$size = $_FILES["image"] ["size"];
		$error = $_FILES["image"] ["error"];
		if($size == 0 && $error > 0) //conditions for the file
		{
			$location = "";
		}
		else
		{
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			$user=$_SESSION['id'];
			$content=$_POST['content'];
			$time=time();
		}
	}
	$conn->query("insert into post (post_image,content,date_posted,member_id) values('$location','$content',NOW(),'$session_id')");
	header('location:home.php');
?>
