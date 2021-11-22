<div class="row">
	<div class="col-md-2"><hr>
		<center><img class="pp" src="<?php echo $image; ?>"></center><hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
	</div>
	<div class="col-md-5"><hr>
		<p>Personal Info</p>
		<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
		?><hr>
		<p>Name:<?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </span>
		Gender:<?php echo $row['gender']; ?></p><hr>
		<p>Address:<?php echo $row['address']; ?></p><hr>
	</div>
	<div class="col-md-5">
		<form action="post.php" id="upload_image"  class="form-horizontal" method="POST" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="input01">Image:</label>
				<div class="controls">
					<input type="file" name="image" class="font" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" name = "p_submit" class="btn btn-success">Upload</button>
				</div>
			</div>
		</form>
	</div>
</div>
<style>
   .pp{
  display: inline-block;
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50px;
}
</style>