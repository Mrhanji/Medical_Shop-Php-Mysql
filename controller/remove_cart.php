<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['uid'])){
    redirect("{$domain}"); ///for redirect index.php
}
$uid=$_SESSION['uid'];
if(isset($_GET['id'])){
    
    $id=base64_decode($_GET['id']);


    if(mysqli_query($conn,"DELETE FROM cart WHERE id='$id' ")==1){
        redirect("{$domain}cart.php");
    }else{
        msg("Something Went wrong with insert query...");
    }



}else{

   msg("Something Went Wrong...");
}


?>