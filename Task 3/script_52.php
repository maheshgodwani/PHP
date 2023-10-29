<?php
//// Script 52 Merging an associative array using the array_merge() function.
$array1= array("N"=>"Rahul",
                "A"=>23,
                "c"=>"MCA");
$array2 =array("Name"=>"John",
                "Age"=>25,
                "course"=>"MBA");
print_r(array_merge($array1,$array2));
?>