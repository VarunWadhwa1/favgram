<?php
 	include ("session.php");
	include ('dbcon.php');
	
	if (isset($_POST['post_comment']))
	{
		$user = $session_id;
		$content_comment = $_POST['content_comment'];
		$post_id = $_POST['post_id'];
		$user_id = $_POST['user_id'];
		$image = $_POST['image'];
		$time = time();
		//echo $post_id." ".$session_id." ".$user_id." ".$content_comment." ".$image." ".$time;
		
		
	}
	$conn->query("insert into comments (post_id,user_id,name,content_comment,image,created)
	values ('$post_id','$user','$user_id','$content_comment','$image',NOW())");
	header("Location: home.php");
?>