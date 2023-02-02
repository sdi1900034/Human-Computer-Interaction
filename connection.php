<?php
    $hn = 'localhost';
    $db = 'eam';
    $un = 'root';
    $pw = '';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error){
       die("Connection Failed.".$conn->connect_error); 
    } 

    //echo "success";

?>