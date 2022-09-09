<?php

$mysqli = new mysqli('localhost','root','','learningphp');

//check connection
if(mysqli_connect_errno()){
    printf("Connect Failed: %s\n",mysqli_connect_error());
    exit();
}

// echo 'Connected Successfully to mySQL. <BR>';

//Select a database to work with
$mysqli->select_db("learningphp");