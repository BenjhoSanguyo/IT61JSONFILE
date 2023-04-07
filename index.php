<?php 

header('Access-Control-Allow-Origin: *');

$myObj =json_decode(file_get_contents('furniture.json'));



$myJSON = json_encode($myObj);

echo $myJSON;

?>
