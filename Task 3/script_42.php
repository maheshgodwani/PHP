<?php
//script 42 to find the difference between two  array using array_diff().
 
$Name=array("Rahul","John","Vidhay","Yuvraj");
$name2=array("Smith","Michael","Rahul");
 
echo "<br/>";
$intersection_value=array_diff($Name,$name2); 
print_r($intersection_value);

?>