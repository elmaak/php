<?php

$host = "localhost";
$user = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host", $user , $password);

    echpo("Connected");

}catch(Exception $e){
    echo("Not connected");
}

?>