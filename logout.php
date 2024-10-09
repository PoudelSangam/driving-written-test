<?php
    session_start();
    session_destroy();
    unset($_SESSION["student_roll_no"]);
    header("Location:index.php");
 ?>