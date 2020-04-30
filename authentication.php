<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style type="text/css">
    body
    {
        background-image: linear-gradient( to right ,#0f0c29,#302b63,#24243e);
    }
    h1
    {
    text-align: center;
    
    color: red;
    margin-top: 15%;   
    font-size: 20px;
    }
    h2
    {
    text-align: center;
    
    color: red;
    margin-top: 5%;   
    font-size: 20px;
    }
    .container
    {
    text-align: center;
  margin:auto;
    width:300px;
    height:300px;
  background: #0c151b;
  border-radius: 10px;
  box-shadow: 0px 10px 36px 12px rgba(0,0,0,1);

    }
    button
    {
        border-radius: 5px;
        
    }
</style></head>
<body>

     <div class="collegelogo" style="text-align: center;">
 <img src="logo3.png" alt="College Logo" height="100px" ></div><br>
 <div class="container">
<?php      
    include('connection.php');  
    $username = $_POST['user'];  //gets username from login
    $password = $_POST['password'];  //gets password here i didn't used get because it's not prefered when we use passwords
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  //removes backslashes
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username); //escapes special charaacters 
        
      
        $sql = "select *from login where username = '$username' and password = '$password'"; //gets username and password from table and checks with input 
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  //fetches result as an array
        $count = mysqli_num_rows($result);//returns no.of rows   
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header('Location:afterlogin.html');//after succesfull login location
        }  
        else{  
            echo "<br><h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i><br> Either password or username not valid!<br> please check once again and contact admin</h1>";

        }     
?> 
<div class="man"> 
    <h2>
<button class="goback" onclick="location.href='login.html'"> Go Back to Login</button></div></h2>
</div>
</body>
</html>