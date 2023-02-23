<?php


    $host = "localhost";
    $dbname = "jobboard"
    $user = "root";
    $pass = ""

    $conn = new PDO("mysql:host=$host;dbname=$dbname,$user,$pass");

    if($conn == true){
        echo "connected successfully"; 
    }else{
        echo "error";
    }