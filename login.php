<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    
    <link rel="stylesheet" href="log.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


       
</head>

<body>
   
    
  <div class="background-image"></div>
  
    <div class="main">
       
        <div class="left-side">
           
                <h2><strong id = "b" >SUPREME</strong > Medcare</h2>
                    <h3 id="prg">Pharmacy for all your needs</h3>
                    <p id="emrg"> <b>For emergency consultation</b> <br>
                        <i class="material-icons">call</i>  +91 7300968026 <br>
                        <i class="material-icons">email</i> superememedical94@gmail.com</p>

                    
         
         
      
        
        </div>
    <div class="right-side">
        <hr><hr>
        
        <h2> <i class="fa fa-user-circle-o"></i> USER LOGIN </h2>

        <p id="acnt">Don't have an acoount? <a href="signup.html" >Create your account</a>, it takes less than a minute.</p>
    
     
        <form action="coonect.php" method="post">

        <div class="text_field"> 
            <input type="text"name="Name" required >
          
            <span></span>
            <label>NAME</label>
        </div>
     
        <div class="text_field">
            <input type="password" name="Password" required>
            <span></span>
            <label>PASSWORD</label>
        </div>
       <p id="pwd" > Forgot Password?  <a id="demo" href="#" > Click Here</a> </p>
    <input type="submit"   value= "LOGIN "  href="table.php"> <br>
        
        </form>

        <p id="L">Login  with social media</p>
        <div class="social-media">
<button>  <a href="#" ><i class="fa fa-facebook"></i>Facebook</a></button>
<button><a href="#"><i class="fa fa-twitter"></i>Twitter</a></button>
<button><a href="#"><i class="fa fa-google"></i>Google+</a></button>

      </div>
        </div>
</div>




    </body>
    </html>