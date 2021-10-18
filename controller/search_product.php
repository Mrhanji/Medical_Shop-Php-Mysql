<?php
include '../include/config.php';
$pid= base64_decode($_GET['pid']);
$data=mysqli_query($conn,"SELECT * FROM `product_list` WHERE name='$pid' ");
$searchdata=mysqli_fetch_assoc($data);
$url=$domain.'productview.php?catid='.$searchdata['category_id'].'&pid='.$searchdata['product_id'];



echo '<script> window.location.replace("'.$url.'"); </script>';



?>