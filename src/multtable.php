<?php
/**
 * Regina Imhoff
 * CS290 Assignment 4
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


$minMultiplicand = (int) $_GET['min-multiplicand'];
$maxMultiplicand = (int) $_GET['max-multiplicand'];
$minMultiplier = (int) $_GET['min-multiplier'];
$maxMultiplier = (int) $_GET['max-multiplier'];

function isMinLessThanMax($min, $max){
    /*if($max == null){
        echo "No maximum parameter given :(<br>";
    }*/

    /*if($max != (integer($max))){
        echo "Maximum parameter is not an integer :(<br>";
    }*/


    /*if($min == null){
        echo "No minimum parameter given :(<br>";
    }*/

    if(!is_numeric($min)){
        echo "Minimum parameter is not an integer :(<br>";
    }

    if($min > $max){
        echo '$min is ' . $min . "<br>";
        echo '$max is ' . $max . "<br>";
        echo '$min ' . $min . ' is greater than $max ' . $max . "<br>";
    }

}

isMinLessThanMax($minMultiplicand, $maxMultiplicand);
isMinLessThanMax($minMultiplier, $maxMultiplier);




?>