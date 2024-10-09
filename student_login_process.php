<?php
include 'db.php';

 session_start();
if(isset($_POST['submit']))
{
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    if($Email!='' && $Password!='')
    {
        $sql=mysqli_query($conn,"SELECT * FROM user where user_rollno='$Email' and user_password='$Password'");
        $row=mysqli_fetch_array($sql);
        if($row)
        {
           
            $_SESSION['student_roll_no']= $Email;
              $_SESSION['id']= $row['user_id'];
            echo "Success";
        }
        else
        { 
           echo "Invalid Roll Number /Password";
        }
    }
}
?>