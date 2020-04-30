<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		 body
 {
 	 background-image: linear-gradient( to right ,#0f0c29,#302b63,#24243e);
 }
 .main{
 text-align: center;
  margin:auto;
 	color: white;
 	font-size: 20px;
 
 }
.topnav {
  overflow: hidden;
  border-radius: 5px;
  background-image: linear-gradient(to left , #000000,#434343);
  width: 60%;
  margin: auto;
  box-shadow: 0px 0px 5px 5px blue;
}

.topnav a {
  position: relative;
  display:inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 17px;
  border-radius: 5px;
  margin: 0;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}



.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(18,170,209);
  color: white;
  transition: 0.6s;
}

.dropdown-content a:hover {
  background-color: rgb(18,209,173);
  color: black;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;

  }

}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
    .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
	</style>
</head>
<body>
	      <div class="collegelogo" style="text-align: center;">
 <img src="logo3.png" alt="College Logo" height="100px" ></div>
  <div class="topnav" id="myTopnav" align="center">
  <a href="https://hemanthchandragiri.github.io/mainpage/" ><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  <a href="index.html"><i class="fa fa-fw fa-envelope"></i>Complaints</a>
  <a href="http://www.iiitdm.ac.in" target="_blank"><i class="fa fa-fw fa-building-o"></i>Institute Website</a>
  <a href="team.html" target="_blank"><i class="fa fa-fw fa-user"></i>Our Web team</a>
  <a href="login.html" target="_blank"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Admin login</a>

    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div> 
  <br> <br> <br> <br> <br> <br> <br> <br> <br>
  <div class="main">
<?php

require('confid.php');


extract($_POST);

  	
  	$image = $_FILES['image']['name'];//a variable to get image name  	
  	$target = "images/".basename($image);//images goes into this folder
$dat = date("Y-m-d", strtotime($_POST['dat']));//gets the date input from form
if (empty($image)) {
  $image= 'no image uploaded here';
  # code...
}

$complaint= addslashes($complaint);//when there is single quote inserted in database it won't accept
$sql = "INSERT into complaint (username,rollno,time,email,day,complaint,date,complaintdate,week,image) VALUES('" . $name . "','" . $rollno . "','" . $time . "','" .$email . "','" . $day . "','". $complaint ."','".date('Y-m-d')."','".$dat."','".$week."','$image')"; 
$success = $mysqli->query($sql);//a variable for checking sql is correct or not


if (!$success) {
    die("Complaint not submitted.. please recheck data you submitted ".$mysqli->error);
}
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo"Your complaint is submitted . Click on Home to go back. <br>
      Click on Admin Login to view other complaints";
    }else{
      echo "Your complaint is submitted . Click on Home to go back. <br>
      Click on Admin Login to view other complaints<br><br>and<p style ='color:red'>You haven't uploaded any image! </p> ";
    }


?>
</div>
<script type="text/javascript"> 
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}</script>
</body>
	

</body>
</html>
