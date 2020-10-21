<?php

$user = 'root';
$password = 'root';
$db = 'test';
$host = 'localhost';
$port = 3307;

    try{
        $link = mysql_connect(
        "$host:$port", 
        $user, 
        $password
     );
     $db_selected = mysql_select_db(
        $db, 
        $link
     );
    } catch(Exception $e){
        print_r($e);
    }
    echo "<br>suite..";


echo 'Hello world';
?>