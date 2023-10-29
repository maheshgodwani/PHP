<?php
//script 46 to fill an array with a specific value of an  array using array_fill().
 
$Name=array("Rahul","John","Vidhay","Yuvraj");

$Name=array_fill(5,1,"Ajay"); 
print_r($Name);

?>