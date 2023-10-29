<?php
//script 44 to extract values from associative array using array_values().
 
$Name=array("Mca"=>"Rahul","Mba"=>"John","Msc"=>"Vidhay","Bca"=>"Yuvraj");

$value=array_values($Name); 
print_r($value);

?>