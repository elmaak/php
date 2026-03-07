<?php
$host = 'localhost';
$db = 'testnita';
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