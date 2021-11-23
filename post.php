<?php
	include('dbcon.php');
	include('session.php');
	if(isset($_POST["Submit"])){
		$content = $_POST['content'];
	}
    $img = $_FILES['image'];
    $error = $_FILES["image"] ["error"];
    print_r($img);
    if(isset($_POST['Submit'])||isset($_POST['p_submit'])||isset($_POST['i_submit']))
    { 
        if(!isset($img) || $error > 0){  
            echo "Hello";
            $url = "";
        }else{
            $filename = $img['tmp_name'];
            $client_id="bc22ac7cb378102";
            $handle = fopen($filename, "r");
            $data = fread($handle, filesize($filename));
            $pvars   = array('image' => base64_encode($data));
            $timeout = 30;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
            curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
            $out = curl_exec($curl);
            curl_close ($curl);
            $pms = json_decode($out,true);
            $url = $pms['data']['link'];
            if($url!=""){
            //echo "<h2>Uploaded Without Any Problem</h2>";
            echo "<img src='$url'/>";
            }else{
                //echo "<h2>There's a Problem</h2>";
                
                echo $pms['data']['error'];  
            } 
        }
    }
	else{
		echo "Bruh!!!!!!!";
	}
	if(isset($_POST["Submit"]))
	{
		$conn->query("insert into post (post_image,content,date_posted,member_id) values('$url','$content',NOW(),'$session_id')");
		header('location:home.php');
	}
	elseif(isset($_POST["p_submit"]))
	{	
		$conn->query("update members set image = '$url' where member_id  = '$session_id' ");
		$conn->query("update comments set image = '$url' where user_id  = '$session_id' ");
		header('location:profile.php');
	}
	elseif(isset($_POST["i_submit"]))
	{	
		$conn->query("insert into photos (location,member_id) values ('$url','$session_id')");
		header('location:photos.php');
	}
	
?>
