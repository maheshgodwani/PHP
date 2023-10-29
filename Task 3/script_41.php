<?php
//script 41 to find the intersection between two  array using array_intersect().
 
$Name=array("Rahul","John","Vidhay","Yuvraj");
$name2=array("Smith","Michael","Rahul");
 
echo "<br/>";
$intersection_value=array_intersect($Name,$name2); 
print_r($intersection_value);

?>