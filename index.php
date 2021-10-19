<?php
include 'include/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>
medical store
    </title>
    <link rel="stylesheet" href="newstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include 'include/header.php'; ?>

    <div class="main">
        <h1> WELCOME TO <span class="clrchange">SUPREME MEDICAL STORE</span><br></h1>  
  <h2>Your Health,Our Happiness</h2>
  <a href="#" class="btn btn-full"> Shop Now</a>
  <a href="#" class="btn btn-nav"> Upload Prescription</a> 
    </div>


 <!--POPUP-->
 <div class="form-popup" id="myForm">
  <span class="close" onclick="closePop()">&times;</span>
  <form  class="myform" method="POST">
      <h1 id="top">Consult Now</h1>
      <img class="pharmacist" src="images/pharmacist2.png"><br><br>
      <p id="tag">Consult about your health related issues and medicines with specified Pharmacist!</p>
      <div class="details">     <input placeholder="Name" name="name" type="text" required />
      <input placeholder="Age" type="text" required name="age" />
      <label  id="gen" for="gender">Gender: </label>
      <input id="individual" type="radio" name="user" value="male">
      <label for="individual"><span></span>Male</label>
  
      <input id="organization" type="radio" name="user" value="female">
      <label for="organization"><span></span>Female</label><br><br>
      <label   id="issue"for="option">Realted Isuue:  </label>
     
<select id="problm" name="disease">
<option value="Blood Pressure">Blood Pressure</option>
<option value="Cough">Cough</option>
<option value="Cold">Cold</option>
<option value="Diabetes">Diabetes</option>
<option value="Fever">Fever</option>
<option value="Pain">Pain</option>
<option value="Vomitting">Vomitting</option>
</select><br><br>
<textarea id="msg" placeholder="Write your problem here......."name="problem"></textarea><br>

<button  class="popbtn" type="submit" name="send">Submit</button>
    </form>
    </div>
  </div>
       <section class="category">
          <h2 class="product-category">Shop by Category</h2>
          <div class="box-container">

          <?php 

if(isset($_POST['send'])){
  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $problem=$_POST['problem'];
  $disease=$_POST['disease'];
  $date_time=date("d-m-Y").date("h:i:sa");
  if(mysqli_query($conn,"INSERT INTO `consult` (`name`, age, gender, issue,problem, date_time, `status`) VALUES ('$name', '$age', '$gender', '$disease', '$problem', '$date_time', '0')")==1){
    echo '<script>alert("Thank you! You will get feedback as soon as possible.");</script>';
  }else{
    echo '<script>alert("Sorry Somehting went worng with db");</script>';
  }

  
}

          $category_data=mysqli_query($conn,"SELECT * FROM `category_list`");
          while($cdata=mysqli_fetch_assoc($category_data)){

          
         
          ?>
              <div class="box">
                  <img src="<?php echo $cdata['image'];?>" alt="">
                  <h3 ><?php echo $cdata['name'];?></h3>
                  <a href="productview.php?catid=<?php echo $cdata['category_id'];?>" class="bttn">Explore</a>
              </div>
<?php } ?>
              

            </div>
      </section>

      <?php include 'include/footer.php';?>

<ul class="mobile-list">
    <li><i class="fa fa-home"> <a href="home.html"></a></i><br><div id="nav">Home</li></div>
     <li><i class="fas fa-pills"><a href="#"></a></i><br><div id="nav"> Medicines</li> </div>
      <li>  <i class='fas fa-virus'><a href="covid.html"></a></i><br><div id="nav"> Covid-19</li></div>
     <li><i class="fa fa-user"><a href="login.html"></a></i><br><div id="nav">Login</li></div>
   
  </ul>


  <script>
    function openPop() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closePop() {
    document.getElementById("myForm").style.display = "none";
  }
  function submitform(){
    alert("Thank you! You will get feedback as soon as possible.");
  }
  
  </script>



    </body>
    </html>
