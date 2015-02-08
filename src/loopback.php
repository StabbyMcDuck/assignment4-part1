<?php
/**
 * User: Regina Imhoff
 * Date: 2/8/15
 * Time: 10:29 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 'On');

header('Content-Type: application/json');

$Type = $_SERVER['REQUEST_METHOD'];
$decodedJSON = [];
$decodedJSON['Type'] = $Type;

if($Type == 'GET'){
    $decodedJSON['parameters'] = $_GET;
}elseif($Type = 'POST'){
    $decodedJSON['parameters'] = $_POST;
}

if(empty($decodedJSON['parameters'])){
    $decodedJSON['parameters'] = null;
}

echo json_encode($decodedJSON);



?>