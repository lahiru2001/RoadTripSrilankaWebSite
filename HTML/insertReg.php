<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

if(isset($_POST['submit'])) {  

include ("connection.php");
  
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
   $username=$_POST['username'];
   $password=$_POST['password'];   
   
   if(!empty($errorMessage))
	  {
	    echo("<p>There was an error with your form:</p>\n");

	    echo("<ul>" . $errorMessage . "</ul>\n");

	  }
   else{
    
	$sql = "INSERT INTO register". "(firstname,lastname,email,phonenumber,username,password) ". "VALUES ('$firstname','$lastname','$email','$phonenumber','$username','$password')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            echo "Registration Successfully !!!\n";
			}	
     } 
   
}else { 

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>