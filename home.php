<?php 
  include('header.php');
  include('session.php');
?>    
<html>
  <body>
    <?php include('navbar.php'); ?>
	<div id="masthead">  
		<div class="container">
			<?php include('heading.php'); ?>
			<div class="row">
            	<div class="col-md-12"> 
            		<div class="top-spacer"> </div>
              			<div class="panel">
                			<div class="panel-body">
                  				<div class="row"><br>
									<?php
										$query = $conn->query("SELECT * from post LEFT JOIN members on post.member_id = members.member_id order by post_id DESC");
										while($row = $query->fetch(PDO::FETCH_ASSOC) )
										{
										$posted_by = $row['firstname']." ".$row['lastname'];
										$id = $row['post_id'];
									?>
									<?php
										$id = $_SESSION['id'];
										include("dbcon.php");
										$query=$conn->query("SELECT * from users where user_id='$id' order by user_id DESC");
										while($row = $query->fetch(PDO::FETCH_ASSOC))
										{
											$id = $row['user_id'];
										}
									?>		
									<?php	}	?>
									<?php
										include("dbcon.php");
										$query = $conn->query("SELECT * from post LEFT JOIN members on post.member_id = members.member_id order by post_id DESC");
										while($row = $query->fetch(PDO::FETCH_ASSOC))
										{
											$posted_by = $row['firstname']." ".$row['lastname'];
											$location = $row['post_image'];
											$profile_picture = $row['image'];
											$content=$row['content']; 
											$post_id = $row['post_id'];
											$time=$row['date_posted'];
											$member_id = $row['member_id'];
									?>
									<div id="right-nav1">
										<div class="profile-pics">
											<img class ="show1" src="<?php echo $profile_picture ?>">
											<b><?php echo $posted_by ?></b>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time; ?>
										</div><br />
										<div class="post-content">
											<div class="delete-post">
												<?php 
													if($session_id == $member_id)
													{ ?>
													<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post">
													<button class="btn-delete">X</button></a>
													<?php } ?>
										</div>
										<p><?php echo $row['content'] ."<br><br>"; ?></p>
										<?php 
											if(!empty($location))
											{
										?>
										<center><img src="<?php echo $location ?>"></center>
										<?php } ?>
										
										<?php include('comment_test.php'); ?>
										<form  method="POST" action="comment.php">			
											<div class="comment-area">
						
												<?php   $image=$conn->query("select * from members where member_id='$session_id'");
													while($row = $image->fetch()){
													
												?>
												<img class ="show1" src="<?php echo $row['image']; ?>" width="30px" height="30px">
												
												<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
												<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
												<input type="hidden" name="user_id" value="<?php echo $row['firstname']." ".$row['lastname']  ?>">
												<input type="hidden" name="image" value="<?php echo $row['image']  ?>">
												<input type="submit" name="post_comment" value="Enter" class="btn-comment">
												<?php } ?>
											</div>
										</form>
									</div><br />  <?php   }   ?>
								</div>
							</div><hr>
						</div>
					</div>                                                    
				</div>
			</div>
		</div>
                                                
      <style>
      body {
	background-image: url('../image/b.png');
	background-attachment: fixed;
	background-size: 100% 100%;
}
#header {
	background-color: yellow;
	width:100%;
	margin-top:-8px;
}

.head-view {
	margin:auto;
	width:1300px;
	line-height:50px;
}
.head-view label {
	color:#ffffff;
	font-size:25px;
	font-weight:bold;
	text-shadow:3px 3px 3px #000000;
}
.head-view ul {
	width: 1200px;
	margin: auto;
}
.head-view  li {
	display: inline;
	color: #fff;
	margin: 0px 30px 0px 5px;
}
.head-view  li a {
	text-decoration:none;
}
.head-view label:hover {
	padding: 5px 0px 5px 0px;
	border-bottom: 4px solid #fff;
}
.active {
	padding: 5px 0px 5px 0px;
	border-top: 4px solid #fff;
}
.head-view b {
	color:#ffffff;
	text-shadow:3px 3px 3px #000000;
	font-size:50px;
}
.btn-sign-in {
	color:#000000;
	font-size:19px;
	width:100px;
	line-height:30px;
	background-color:#ffffff;
	border:2px solid #0bacff;
	border-radius:100px;
	-webkit-border-radius:100px;
	-moz-border-radius:100px;
	-o-border-radius:100px;
}
.btn-sign-in:hover {
	color:#ffffff;
	background-color:#0bacff;
	border:2px solid #0bacff;
}
.btn-sign-up {
	color:#ffffff;
	font-size:19px;
	width:100px;
	line-height:30px;
	background-color:#0bacff;
	border:2px solid #0bacff;
	border-radius:100px;
	-webkit-border-radius:100px;
	-moz-border-radius:100px;
	-o-border-radius:100px;
}
.btn-sign-up:hover {
	color:#ffffff;
	background-color:#0488cd;
	border:2px solid #0488cd;
}
#container {
	width:1200px;
	margin:auto;
}
#left-nav {
	width: 348px;
	float:left;
	border: 1px solid #dfe0e4;
	background-color: #73cfff;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	margin-top:10px;
}
.clip1{
	margin-top: 10px;
	margin-left: 15px;
	position: relative;
	width: 95px;
	height: 100px;
	border: solid 2px #fff;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.clip1 img {
	width: 95px;
	height: 100px;
	margin: auto;	
	left: -15px;
}
.user-details {
	width: 200px;
	margin: -50px 0 0 125px;
	font-size: 16px;
	line-height: 25px;
	text-align: center;
}
.user-details h3, h2 {
	color:#ffffff;
	text-shadow:2px 2px 2px #000000;
}
#right-nav {
	float:right;
	width:500px;
	background-color:#ffffff;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	border:3px solid #CCCCCC;
	margin-top:10px;
}
.post-text {
	width:99%;
	height:150px;
	border:3px solid #73cfff;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	font-size:19px;
	text-indent:5px;
}
.btn-add-photo {
	color:#ffffff;
	font-size:19px;
	width:200px;
	line-height:30px;
	background-color:#0bacff;
	border:2px solid #0bacff;
	border-radius:100px;
	-webkit-border-radius:100px;
	-moz-border-radius:100px;
	-o-border-radius:100px;
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
	color:powderblue;
	background-color:#0488cd;
	border:2px solid #0488cd;
}
#right-nav1 {
	margin-top: 10px;
	width: 100%;
	background-color:#ffffff;
	height: auto;
	float: right;
	padding: 7px;
}
.profile-pics {
	position:relative;
}
.profile-pics img {
	width:70px;
	height:70px;
	border:2px solid #CCCCCC;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.profile-pics b {
	color:#000000;
	text-shadow:1px 1px 1px #73cfff;
	margin-left:16px;
	font-size:23px;
}
.profile-pics strong {
	color:#000000;
	margin-left:10px;
	font-size:20px;
}
.show1{
	display: inline-block;
	width: 65px;
	height: 65px;
	object-fit: cover;
}
.post-content {
	width:100%;
	border:2px solid #CCCCCC;
}
.post-content p {
	text-indent:10px;
	font-size:23px;
}
.post-content img {
	border:3px solid #CCCCCC;
	width:50%;
	height:50%;
}
.delete-post {
	float:right;
	margin-right:5px;
	margin-top:5px;
}
.btn-delete {
	color:#ffffff;
	font-size:10px;
	float:right;
	width:30px;
	background-color:#0bacff;
	border:1px solid #0bacff;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
}
.btn-delete:hover {
	color:#000000;
	font-size:10px;
	width:30px;
	font-weight:bold;
	background-color:#ffffff;
	border:1px solid #0bacff;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
}
.comment-area {
	width:70%;
	background-color:#ffffff;
	border:1px solid #0bacff;
	padding:3px;
	margin-top:10px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
}
.comment-area img {
	display: inline-block;
	width: 65px;
	height: 65px;
	object-fit: cover;
}
.user-comment-name {
	font-size:17px;
	color:#000000;
	text-indent:5px;
}
.user-comment-name img {
	width:70px;
	height:70px;
	margin-top:10px;
	border:3px solid #CCCCCC;
	border-radius:9px;
}
.time-comment {
	font-size:15px;
	color:#000000;
	margin-left:15px;
}
.comment {
	font-size:18px;
	color:#000000;
	text-indent:15px;
	margin-top:5px;
	margin-bottom:5px;
}
.picture-comment img {
	width:10%;
	height:10%;
}
.comment-text {	
	border:1px solid #0bacff;
	font-size:19px;
	text-indent:5px;
	width:350px;
}
.comment-display {
	width:70%;
	background-color:#ffffff;
	border:2px solid #cccccc;
	margin-top:10px;
}
.btn-comment {
	color:#ffffff;
	font-size:20px;
	width:70px;
	background-color:#0bacff;
	border:1px solid #0bacff;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
}
.btn-comment:hover {
	color:#000000;
	font-size:20px;
	width:70px;
	font-weight:bold;
	background-color:#ffffff;
	border:1px solid #0bacff;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
}
	</style>                                                                          
	<script id="BotPenguin-messenger-widget" src="https://cdn.botpenguin.com/botpenguin.js" defer>
	619d0dcbef2aaa0967e11417,619d0c9100bf93097fe1caed</script>
    </body>
</html>