<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					<?php include('heading.php'); ?>
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>
				<?php
				
function time_stamp($session_time) 
{ 
 
$time_difference = time()-$session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

	$query = $conn->query("SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC");
	while($row = $query->fetch()){
	$posted_by = $row['firstname']." ".$row['lastname'];
	
	$id = $row['post_id'];
	?>
      
		
<?php
$id = $_SESSION['id'];
	include("dbcon.php");
			$query=$conn->query("SELECT * from user where user_id='$id' order by user_id DESC");
			while($row=$query->fetch()){
				$id = $row['user_id'];
?>	
		
<?php
}
?>
		

<?php
	include("dbcon.php");
			$query=$conn->query("SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC");
			while($row=$query->fetch()){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$location = $row['post_image'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content']; 
				$post_id = $row['post_id'];
				$time=$row['created'];	
?>
		<div id="right-nav1">
			<div class="profile-pics">
			<img src="<?php echo $image ?>">
			<b><?php echo $posted_by ?></b>
			
			</div>
		<br />
			<div class="post-content">
				<div class="delete-post">
				<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button class="btn-delete">X</button></a>
				</div>
			<p><?php echo $row['content']; ?></p>
		<center>
			<img src="<?php echo $location ?>">
		</center>
		</div>
    

    <?php
	}
	?>
		
	<?php
	}
	?>
			
          </div>
          <hr>
        </div>
      </div>
                                                                                       

                            
                                                      
   	</div><!--/col-12-->
  </div>
</div>
                                                
      <style>body {
background-image: url('../image/b.png');
background-attachment: fixed;
background-size: 100% 100%;
}
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
    width:600px;
    background-color:#ffffff;
  
    border-radius: 5px;
    
    margin-top:10px;
    }
    
    .post-text {
    width:50%;
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
    color:#ffffff;
    background-color:#0488cd;
    border:2px solid #0488cd;
    }
    
    #right-nav1 {
    margin-top: 10px;
    width: 10%;
    background-color:#ffffff;
    
    height: 50%;
    
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
    
    .post-content {
    width:10%;
    border:2px hidden #CCCCCC;
    }
    
    .post-content p {
    text-indent:5px;
    font-size:23px;
    }
    
    .post-content img {
    border:3px  #CCCCCC;
    width:5%;
    height:5%;
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
    /*
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
    //
    .comment-area img {
    width:10%;
    height:10%;
    }
    
    .user-comment-name {
    font-weight:bold;
    font-size:20px;
    color:#000000;
    font-size:22px;
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
    width:100%;
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
    }*/

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
width:10%;
height:10%;
}

.user-comment-name {
font-weight:bold;
font-size:20px;
color:#000000;
font-size:22px;
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
width:100%;
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
}</style>                                                                          

        
    </body>
</html>