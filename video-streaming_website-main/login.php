<?php

$host = 'localhost';  
$user = 'root';       
$pass = ''; 
$db = 'stream_app';     
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$username = $_GET['username'];
$password = $_GET['password'];
$result = $mysqli->query("SELECT * FROM user_info WHERE user_name='$username'"); 
echo "hi";


    $user = $result->fetch_assoc();
    //echo $user;

    if ( $password == $user['pass_word'] ) {
        

        header("location: ./main_page/index.html");
    }
    else {
        
        header("location: error.html");
    }

