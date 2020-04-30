<?php
$host = "localhost";
$user="root";
$password= "";
$db_name="testproject";
$con =mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_errno())
{
	die("failed to connect".mysqli_connect_errno());

}
?>