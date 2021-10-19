<?php include 'include/config.php';
session_start();
if(!isset($_SESSION['uid'])){
  header("Location: index.php");
}
$userid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html>
    <head>
    <title>
cart
    </title>
    <link rel="stylesheet" href="item.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .template{
  width:100%;
  height:350px;
  padding:10px;
  background-image: url('images/medicines.jpg');
  background-size:cover;
  background-repeat:no-repeat;
  background-position: center;
  margin-top:50px;
}
    </style>

</head>
<body>
   
 <?php include 'include/header.php';?>
        <div class="template">
<h1 >25% off</h1> 
<h2 class="generic">On Generic Medicines</h2>
        </div>
        <section class="category">
            <h2 class="product-category">Medicines</h2>
            <div class="box-container">
                
  <?php  $product=mysqli_query($conn,"SELECT *FROM cart c INNER JOIN product_list pl ON c.product_id=pl.product_id WHERE user_id='$userid'");
         if(mysqli_num_rows($product)>0){
             while($data=mysqli_fetch_assoc($product)){

         
  ?>
               
                   <div class="box">
                    <img src="<?php echo $data['image'];?>" alt="">
                    <h3 >Kofflet Syrup</h3>
                    <p>A bottle of 150 ml<br>  ₹130</p>
                    <a href="covid_essent.html" class="bttn">Add to Cart</a>
                   </div>
                   <?php 
                       }
                    }else{
                        echo 'No item in cart';
                    }
                   ?>

  
              </div>
        </section>



    </div>

