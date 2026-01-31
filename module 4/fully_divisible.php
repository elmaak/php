<?php

function fully_divisible($n){
    
    if(($n % 2)== 0){
        return "$n is fully divisible by 2 ";
    }
    else{

        return"$n is not disivible by 2";
    }
}

print_r(fully_divsible(4)  . "<br>");
print_r(fully_divsible(36)  . "<br>");
print_r(fully_divsible(16)  . "<br>");
print_r(fully_divsible(5)  . "<br>");

?>