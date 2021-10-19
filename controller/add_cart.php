<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['uid'])){
    redirect("{$domain}"); ///for redirect index.php
}
$uid=$_SESSION['uid'];
if(isset($_GET['pid'])){
    
    $pid=base64_decode($_GET['pid']);


    if(mysqli_query($conn,"INSERT INTO cart(user_id, prodduct_id) VALUES ('$uid', '$pid')")==1){
        redirect("{$domain}cart.php");
    }else{
        msg("Something Went wrong with insert query...");
    }



}else{

   msg("Something Went Wrong...");
}


?>