<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php
	$my_friend_id = $_POST['my_friend_id'];
	$conn ->query("insert into friends (my_friend_id,my_id) values('$my_friend_id','$session_id')");
 	header('location:friends.php'); 
?>
