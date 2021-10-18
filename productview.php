<?php 
include 'include/config.php';
if(isset($_GET['catid'])){
    $catid=$_GET['catid'];


    
    $getbanner=mysqli_query($conn,"SELECT *FROM category_banner WHERE category_id='$catid' ");
    $catbanner=mysqli_fetch_assoc($getbanner);

    $getbanner=mysqli_query($conn,"SELECT *FROM category_list WHERE category_id='$catid' ");
    $title=mysqli_fetch_assoc($getbanner);
}else{
    echo '<script> window.location.replace("index.php"); </script>';
}

?>

<!DOCTYPE html>
<html>
    <head>
    <title>
<?php echo $title['name'];?>
    </title>
    <link rel="stylesheet" href="item.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .template{
  width:100%;
  height:470px;
  padding:10px;
  background-image: url('<?php echo $catbanner['img']; ?>');
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

        </div>
        <section class="category">
            <h2 class="product-category"><?php echo $title['name'];?></h2>
            <div class="box-container">

<?php 
if(!isset($_GET['pid'])){
$catproduct=mysqli_query($conn,"SELECT *FROM product_list WHERE category_id='$catid';");
if(mysqli_num_rows($catproduct)>0){
 
    while($catdata=mysqli_fetch_assoc($catproduct)){


?>

                <div class="box">
                    <img src="<?php echo $catdata['image']; ?>" alt="">
                    <h3 ><?php echo $catdata['name']; ?></h3>
                    <p><?php echo $catdata['info']; ?><br> &#8377; <?php echo $catdata['price']; ?></p>
                    <a href="controller/add_cart.php?pid=<?php echo  base64_encode($catdata['product_id']);?>" class="bttn">Add to Cart</a>
                   
                </div>
                <?php 
                
            }


        }else{
        
            echo '<script>alert("No Products in this category.");</script>';
            echo '<script> window.location.replace("index.php"); </script>';

        }
    }else{
        $pid=$_GET['pid'];
        $s=mysqli_query($conn,"SELECT *FROM product_list WHERE product_id='$pid';");
       
         
            $catdata=mysqli_fetch_assoc($s);
            
            echo '
            <div class="box">
                <img src="'.$catdata['image'].'" alt="">
                <h3 >'. $catdata['name'].'</h3>
                <p>'.$catdata['info'].'<br> &#8377;'. $catdata['price'].'</p>
                <a href="controller/add_cart.php?pid='.base64_encode($catdata['product_id']).'" class="bttn">Add to Cart</a>
               
            </div>';
            

        





    }





                ?>
  
               
           

                  
                     
                   
   

              </div>
        </section>



    </div>

    
</body>
</html>