<?php
	include('dbcon.php');

	$get_id =  $_GET['cid'];
	$conn ->query("DELETE FROM comments WHERE comment_id = '$get_id'");
	header("Location: home.php");

?>
