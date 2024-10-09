<?php

$databaseHost = 'localhost';
$databaseName = 'Mcq'; 
$databaseUsername = 'root'; 
$databasePassword = '';  

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, "$databaseName");
 if(!$conn){
        die('Could not Connect My Sql:' .mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8');
   
   
	 
?>