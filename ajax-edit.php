<?php
  $user_Id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","ci_db");
$query="SELECT * FROM users WHERE id={$user_Id}";
$result=mysqli_query($conn,$query);
$output="";
if (mysqli_num_rows($result)>0) {
	         while ($row=mysqli_fetch_assoc($result)) 
	         {
             $output.="
                       <tr>
               <td class='p-2'>Name</td>
               <td><input type='text' id='ename' value='{$row['Name']}' ></td>
               <td><input type='text' hidden id='e-id' value='{$row['id']}' ></td>
             </tr>
             <tr>
               <td class='p-2'>User Name</td>
               <td><input type='text' value='{$row['Username']}' readonly ></td>
             </tr>
             <tr>
               <td></td>
               <td><input type='button' id='edit-save' class='btn btn-warning'  value='Save'></td>
             </tr>";

	     }
	         mysqli_close($conn);
	         echo $output;
}

?>