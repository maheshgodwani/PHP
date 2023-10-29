<?php
//script 40 to remove and replace elements array using array_splice().
 
$Name=array("Rahul","John","Vidhay","Yuvraj");
$name2=array("Smith","Michael",);
 
print_r($Name);
echo "<br/>";
array_splice($Name,0,2,$name2); // removing the elements starting index 0 and ending index 2 replacing with different elements.
print_r($Name);


?>