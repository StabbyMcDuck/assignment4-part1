<?php
/**
 * Regina Imhoff
 * CS290 Assignment 4
 * Date: 2/7/15
 * Time: 10:00 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$filtered_by_parameter = [];
$all_integers = true;

$parameters = ['min-multiplicand', 'max-multiplicand', 'min-multiplier', 'max-multiplier'];

foreach ($parameters as $parameter) {
    $filtered = filter_input(INPUT_GET, $parameter, FILTER_VALIDATE_INT);

    if ($filtered === NULL) {
        $all_integers = false;
        echo $parameter . " GET parameter is missing.<br/>";
    } elseif ($filtered === false) {
        $all_integers = false;
        echo $parameter . " GET parameter is not an integer.<br/>";
    } else {
        $filtered_by_parameter[$parameter] = $filtered;
    }
}

if ($all_integers) {
    $all_ordered = true;
    $suffixes = ['multiplicand', 'multiplier'];

    foreach ($suffixes as $suffix) {
        $min_parameter = 'min-' . $suffix;
        $max_parameter = 'max-'. $suffix;

        if ($filtered_by_parameter[$min_parameter] > $filtered_by_parameter[$max_parameter]) {
            echo $min_parameter . " is greater than " . $max_parameter;
            $all_ordered = false;
        }
    }

    if ($all_ordered) {
        echo '<table>';

        $multiplicandStart = $filtered_by_parameter['min-multiplicand'] - 1; //0th row
        $multiplierStart = $filtered_by_parameter['min-multiplier'] - 1; //0th column


        for($i = $multiplicandStart; $i <= $filtered_by_parameter['max-multiplicand']; $i++){
            echo '<tr>';

            for($j = $multiplierStart; $j <= $filtered_by_parameter['max-multiplier']; $j++){
                if(($i == $multiplicandStart) and ($j == $multiplierStart)) {
                    echo '<th></th>';
                }else if($i == $multiplicandStart){
                    /* print top row */
                    echo "<th>".$j."</th>";
                }else if($j == $multiplierStart){
                    /* print first column */
                    echo "<th>".$i."</th>";
                }else{
                    echo "<td>".$i * $j."</td>";
                }
            }
            echo '</tr>';
        }

        echo '</table>';

    }

}

?>