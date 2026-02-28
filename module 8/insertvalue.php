<?php


    $host = "localhost";
    $db = "testelma";
    $user = "root";
    $pass = "";


    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $username = "Arianita";

        $password = "nita1234";

        $sql = "INSERT INTO users(username, password) VALUES ('$username','$password')";
  
   
        $conn->exec($sql);


        echo("Table created");
        
    }catch(Exeption $e){


        echo("Table not created");


    }
?>