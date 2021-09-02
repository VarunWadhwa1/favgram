<?php
	include("dbcon.php");
			$comment=$conn->query("SELECT * from comments where post_id='$post_id' order by post_id DESC");
			while($row=$comment->fetch()){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
				$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>	/*		
			<div class="comment-display"<?php echo $comment_id ?>>
					<div class="delete-post">
					<a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment"><button class="btn-delete">X</button></a>
					</div>
				<div class="user-comment-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><b class="time-comment"><?php echo $time = time_stamp($time); ?></b></div>
				<div class="comment"><?php echo $row['content_comment']; ?></div>
			
			</div>
			<br />

<?php
}
?>
			

		 <form  method="POST" action="comment.php">			
			<div class="comment-area">
			
						<?php$id = $_SESSION['id']; $image=$conn->image("select * from user where user_id='$id'");
							while($row=$image->fetch()){
							

							?>
						<img src="<?php echo $row['profile_picture']; ?>" width="50" height="50">
						<?php } ?>
			
			<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
			<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
			<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
			<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
			<input type="submit" name="post_comment" value="Enter" class="btn-comment">
			
			</div>
		</form>

			
		</div>