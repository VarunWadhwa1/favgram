<?php include ("session.php");?>
<?php
	include ('dbcon.php');
	
	if (isset($_POST['post_comment']))
	{
		$user=$_SESSION['id'];
		$content_comment=$_POST['content_comment'];
		$post_id=$_POST['post_id'];
		$user_id=$_POST['user_id'];
		$time=time();
		

		{
			$query=$conn->query("INSERT INTO comments (post_id,user_id,content_comment,image,created)
			VALUES ('$post_id','$user_id','$content_comment','$image',$time)");
			echo "<script>window.location='home.php'</script>";
		}
			
	}
	
?>