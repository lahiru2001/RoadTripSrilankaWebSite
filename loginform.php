<?php
session_start();
$message="";
if(isset($_POST['submit'])) {
	
 include 'connection.php';
 
 $email=$_POST["email"];
 $password=$_POST["password"];


 $sql="SELECT * FROM register WHERE email='$email' and password='$password'";

$result = mysqli_query($conn,$sql);

$row= mysqli_fetch_array($result);

   $_SESSION['user']=$row['email'];
   
	if(mysqli_num_rows($result) == 1) {
         
       	header("location: morepackages.php");
      }else 
	  {
        $msg = "Your Login Name or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Login</title>
<link href="../CSS/login form.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div class="nav">
  <nav>
  <img src="../image/logokkkk-removebg-preview.png" width="175" height="100">
  <a class="active" href='contact us.html'>CONTACT US</a>
 <a class="active" href="about us.html">ABOUT US</a>
 <a class="active" href="register form.html">REGISTER</a>
 <a class="active" href="loginform.php">LOGIN</a>
 <a class="active" href="gallary.html">GALLARY</a> 
 <a class="active" href="famous destination.html">FAMOUS DESTINATION</a>
 <a class="active" href="unlockpackages.html"> PACKAGES</a>
 <a class="active" href="Home page.html">HOME</a>
 </nav>
</div>


<div class="text">
<h2>ROAD TRIP SRILANKA LOGIN HERE</h2>
</div>   
    <div class="login"> 
       
    <form name="Login"id="login" method="post" action="">    
        <label><b>Email     
        </b>    
        </label>    
        <input type="text" required class="input" name="email" id="email" placeholder="Email">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="password" required class="input" name="password" id="pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="submit" id="submit" value="Log In">       
        <br><br>    
         
        <br><br> 
        <a href="register form.html">Not Registed? create an account</a>    
    </form> 
    </div>    
</body>
</html>
