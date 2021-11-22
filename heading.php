    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-5">
			<hr>
			<p>Personal Info</p>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p>Name:<?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </span>Gender:<?php echo $row['gender']; ?></p>
			<hr>
			<p>Address:<?php echo $row['address']; ?></p>
			<hr>
		</div>
      <div class="col-md-5"> 	<div id="right-nav">
			<h3>Update Status</h3>
	<div>
			<form action="post.php" enctype="multipart/form-data" method="POST">
				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				<input type="file" size="5"  name="image">
				<button class="btn-share" name="Submit" value="Log out">Share</button>
<style>
   .pp{
  display: inline-block;
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50px;
}
 .btn-add-photo:hover {
    color:#ffffff;
    background-color:#0488cd;
    border:2px solid #0488cd;
    }
    
    .btn-share {
    color:#ffffff;
    font-size:19px;
    float:right;
    width:100px;
    line-height:30px;
    background-color:#0bacff;
    border:2px solid #0bacff;
    border-radius:100px;
    -webkit-border-radius:100px;
    -moz-border-radius:100px;
    -o-border-radius:100px;
    }
    
    .btn-share:hover {
    color:#ffffff;
    background-color:#0488cd;
    border:2px solid #0488cd;
    }
    </style>
			</form>
	</div>
	
		</div>
      </div>
    </div> 