<?php
$conn=mysqli_connect("localhost","root","","ci_db");
$query="SELECT * FROM users";
$result=mysqli_query($conn,$query);
$output="";
if (mysqli_num_rows($result)) {
	$output="<table border='2' width='100%' class='table table-light'>
	         <tr class='text-white bg-dark'>  
	         <th >id</th>
	         <th>Name</th>
	         <th>Username</th>
	         <th>Password</th>
	         <th>Edit</th>
	         <th>Delete</th>
	         </tr>";
	         while ($row=mysqli_fetch_assoc($result)) 
	         {
             $output.="
	         <tr>  
	         <td>{$row['id']}</td>
	         <td>{$row['Name']}</td>
	         <td>{$row['Username']}</td>
	         <td>{$row['password']}</td>
	         <td><button type='button' class='btn btn-secondary' id='edit-btn'  data-eid='{$row['id']}'>Edit</button></td>
	         <td><button type='button' class='btn btn-danger' id='delete-btn'  data-id='{$row['id']}'>Delete</button></td>
	         </tr>";
	     }
	         mysqli_close($conn);
	         echo $output;
}

?>