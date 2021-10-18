<?php

if(isset($_GET['pid'])){
    echo base64_decode($_GET['pid']);
}else{

    echo " err";
}


?>