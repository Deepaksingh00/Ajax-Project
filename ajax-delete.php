<?php

$user_Id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","ci_db");

$query="DELETE FROM users WHERE id={$user_Id}";

if (mysqli_query($conn,$query)) 
{
	echo 1;
}else
{
	echo 0;
}

?>