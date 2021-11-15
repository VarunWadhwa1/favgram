<?php include('index_header.php'); ?>
<?php
	include('dbcon.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];

	$conn->query("insert into members (username,password,firstname,lastname,gender,image) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg')");	
?>
<script>alert('Sign UP Success Please Login Your Account');</script>
<script>window.location = 'index.php';</script>
</body>
</html>