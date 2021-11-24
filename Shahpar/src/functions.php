<?php 

namespace TDD;

function add($num1, $num2){

    if(is_numeric($num1) && is_numeric($num2) ){
        return $num1 + $num2;
    } else {
        return "not numeric number.";
    }

}