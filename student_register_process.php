<?php
include_once "db.php";
if (isset($_POST['submit'])) 
{

$username=$_POST['name'];
$password=$_POST['password'];
$rollno=$_POST['rollno'];
$current_date = date('Y-m-d');


$sql=mysqli_query($conn,"SELECT * FROM user where user_rollno='$rollno' and date='$current_date'");

	if(empty($username)||empty($password)||empty($rollno))
	{
    echo "empty field";
   }
   else if(mysqli_fetch_array($sql))
   {
	   $Error="Roll number already exist";
	   echo $Error;

   }
	
   else
   {
   			$sql="INSERT INTO user(user_name,user_rollno,user_password,exam_status,correct_ans) 
            VALUES('$username','$rollno','$password','0','0')";
        
   
			
				if( mysqli_query($conn,$sql))
				{
					echo "1";
					
				}
				else{
					echo "Error" . $sql . "<br>" . mysqli_error($conn);
				}

      mysqli_close($conn);


   }
	
	
	
	
  
 
	
 
 

}

?>