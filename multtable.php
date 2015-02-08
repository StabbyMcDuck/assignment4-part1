<?php
/**
 * Created by PhpStorm.
 * User: reginaimhoff
 * Date: 2/7/15
 * Time: 2:17 PM
 */
$minMultiplicand = $_GET['min-multiplicand'];
$maxMultiplicand = $_GET['max-multiplicand'];
$minMultiplier = $_GET['min-multiplier'];
$maxMultiplier = $_GET['max-multiplier'];

function isMinLessThanMax($min, $max){
    if($min > $max){
        echo '$min is ' . $min . "\n";
        echo '$max is ' . $max . "\n";
        echo '$min ' . $min . ' is greater than $max ' . $max . "\n";
    }
}

echo isMinLessThanMax($minMultiplicand, $maxMultiplicand);
echo isMinLessThanMax($minMultiplier, $maxMultiplier);
?>