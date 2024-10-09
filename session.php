<?php
    session_start();
    if(!isset($_SESSION["student_roll_no"])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
   
?> 