<?php
include ('dbcon.php');
session_start();
if (!isset($_SESSION['id'])){
    header('location:index.php');
}
$session_id = $_SESSION['id'];
$session_query = $conn->query("select * from members where member_id = '$session_id'");
$user_row = $session_query->fetch(PDO::FETCH_ASSOC);
$username = $user_row['firstname']." ".$user_row['lastname'];
$image = $user_row['image'];
?>