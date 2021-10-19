    
        <div class="container">
            <div class="navbar">
           <a href="index.php"><img src="assets/images/logo.png" class="logo" ></a>
            <nav>
                 <ul class="mynav" id="check-class">
                    <li><a href="#"> Home</a></li>
                    <li><a href="medicines.php"> Medicines</a></li>
                    <li><a href="covid.html"> Covid-19</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
               <ul class="sub-nav">
    
                    <div class="consult-btn"><li  onclick="openPop()">Consult</li>
                    </div>
                    <div class="licon">
                     <?php
                    if(!isset($_SESSION['uid'])){
                      $itemdat=null;
                  }
                  else{
                     $uid=$_SESSION['uid'];
                     $getcart=mysqli_query($conn,"SELECT COUNT(id) FROM cart WHERE user_id='$uid'; ");
                     $itemdat=mysqli_fetch_array($getcart);
                  }
                     ?>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart" ></i> <span class="count"><?php
                        
                        if($itemdat==null){
                          echo 0;
                        } else{
                          echo $itemdat['0'];
                        }
                        
                        
                        
                        ?></span></a></li></div>
                    </ul>
        </nav>
      </div> 
     
      <div class="search">
        <form method="POST">
        <input type="text" class="searchTerm" placeholder="Search for medicines....." style="width: 450%" name="search" list="list">
        
        <button type="submit" class="searchButton" name="submit">
          <i class="fa fa-search"></i>
       </button></form>
     </div>
    </div>


    <datalist id="list">
      <?php
       $data=mysqli_query($conn,"SELECT * FROM `product_list`");
       while($searchdata=mysqli_fetch_assoc($data)){
      ?>
      <option value="<?php echo $searchdata['name'];?>"></option>
     <?php  }
     
     
     
     
     
     ?>
          
    

  </datalist>


<?php
if(isset($_POST['submit'])){
  
$pid=base64_encode($_POST['search']);

  echo '<script> window.location.replace("controller/search_product.php?pid='.$pid.'"); </script>';
}

?>

