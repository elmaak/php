<?php


    $host = "localhost";
    $db = "testelma";
    $user = "root";
    $pass = "";


    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql ="ALTER TABLE products DROP COLUMN name ";
  
   
        $conn->exec($sql);


        echo("COLUMN Droped");
        
    }catch(Exeption $e){


        echo("COLUMN NOT Droped");


    }
?>