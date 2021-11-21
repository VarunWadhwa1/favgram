<?php include('header.php'); ?>    
<?php include('session.php'); ?>      
<?php include('navbar.php'); ?>
<body>
	<div id="masthead">  
		<div class="container">
			<?php include('heading.php'); ?> 
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-spacer"> </div>
				</div>
			</div> 
		</div>
	</div>
<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
			<h2 id="po">My Photos</h2>
				<div class="pull-right">
					<form action="post.php" id="photos" method="POST" enctype="multipart/form-data">
						<label class="control-label" for="input01">Image:</label>
						<input type="file" name="image" size ="5" class="font" required>
						<button type="submit" name = "i_submit" class="btn btn-success"><i class="icon-upload"></i> Upload</button>
					</form>
				</div>
			<div class="row"><hr><hr>
				<?php
					$query = $conn->query("select * from photos where member_id='$session_id'");
					while($row = $query->fetch()){
					$id = $row['photos_id'];
				?>
				<div class="col-md-2 col-sm-3 text-center">
					<img class="photo" src="<?php echo $row['location']; ?>" width="160" height="150"><hr>
					<a class="btn btn-danger" href="delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Delete</a>
            	</div>
				<?php } ?>
         	</div>
          <hr>   
        </div>
      </div>                                           
   	</div>
  </div>
</div>                                                                     
<?php include('footer.php'); ?>
    </body>
</html>