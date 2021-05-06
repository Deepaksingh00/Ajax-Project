<?php

$conn=mysqli_connect("localhost","root","","ci_db");
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];

$query="INSERT INTO users (Name,Username,password)VALUES('$name','$username','$password')";
if (mysqli_query($conn,$query)) 
{
	echo 1;
}else
{
	echo 0;
}

?>