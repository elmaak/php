<?php


    $host = "localhost";
    $db = "testelma";
    $user = "root";
    $pass = "";


    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql ="DROP TABLE products";
  
   
        $conn->exec($sql);


        echo("COLUMN Droped");
        
    }catch(Exeption $e){


        echo("COLUMN NOT Droped");


    }
?>