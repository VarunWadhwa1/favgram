<?php

include('dbcon.php');

$get_id =$_GET['id'];
	
	// sending query
	$query=$conn->query("DELETE FROM post WHERE post_id = '$get_id'");
	header("Location: home.php");

?>
