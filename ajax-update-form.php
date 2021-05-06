<?php

$user_Id=$_POST['id'];
$name=$_POST['name'];
$conn=mysqli_connect("localhost","root","","ci_db");

 echo $query="UPDATE users SET Name='{$name}' WHERE id={$user_Id}";

// if ($query) 
// {
// 	echo 1;
// }else
// {
// 	echo 0;
// }

?>