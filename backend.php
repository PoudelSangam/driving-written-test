<?php
include 'db.php';
include 'session.php';
$rollno=$_SESSION['student_roll_no'];
$id=  $_SESSION['id'];
$sql="SELECT * FROM user WHERE user_rollno='$rollno' and user_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sql1="SELECT * FROM question ORDER BY RAND() LIMIT 31";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
mysqli_set_charset($conn, 'utf8mb4');
$sql3="SELECT time FROM exam ";
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($result3);

?>