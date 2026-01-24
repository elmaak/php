<?php

$var=10;
if($var >0){
    echo"the number is grater than 10 <hr>";
}

$age=18;
if($age >=18){
    echo"You can vote <hr>";
}else{
    echo"You cant vote <hr>";
}

$a = 50;
$b = 10;

if($a == $b){
    echo"a is equals b <hr>";
}else if($a > $b){
    echo"a is grater then b <hr>";
}else{
    echo"a is less then b <hr>";
}

switch($age){
    case ($age >=0 && $age<18):
        echo"You are a minor<hr>";
        break;
    case($age >=18 && $age<25):
        echo"You are a young adult<hr>";
        break;
    case($age >=25 && $age<65):
        echo"You are a senior <hr>";
        break;
    default:
         echo"invalid value <hr>";
        break;
    }
$number = 1;

     while($number<=10){
        echo"The number is $number <hr>";
        $number+=1;
        
    }

$z = 1;
    do{
        echo "The number is $z <hr>";
        $z++;
    }while($z <= 5);
    
?>