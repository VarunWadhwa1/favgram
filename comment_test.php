
		<?php
			$comment = $conn->query("SELECT * from comments where post_id='$post_id' order by post_id DESC");
			while($row = $comment->fetch(PDO::FETCH_ASSOC))
			{
				$comment_id = $row['comment_id'];
				$content_comment = $row['content_comment'];
				$time = $row['created'];	
				$post_id = $row['post_id'];
				$user = $_SESSION['id'];
			
		?>		
		<div class="comment-display"<?php echo $comment_id ?>>
			<div class="delete-post">
				<a href="delete_comment.php <?php echo '?cid='.$comment_id; ?>" title="Delete your comment"><button class="btn-delete">X</button></a>
			</div>
			<div class="user-comment-name">
				<img src="<?php echo $row['image']; ?>">
				&nbsp;&nbsp;&nbsp;<b><?php echo $row['name']; ?></b>
				<class="time-comment"><?php echo $time; ?>
			</div>
			<div class="comment"><?php echo $row['content_comment']; ?></div>
			
		</div>
	<?php } ?>