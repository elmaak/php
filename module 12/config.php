<?php
$host = 'localhost';
$db = 'mod13';
$username = 'root';
$password = '';

try {
    $connect = new PDO("mysql:host=$host; dbname=$db", $username, $password );

    echo"Connection succesful";
}
catch(Exception $e){
    echo "Something went wrong";
}


?>