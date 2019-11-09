<?php

 $arr = [

   		"a"=>[1,2,3,4],

   		"b"=>[5,6,7,8],

   		"c"=>[9,10,11,12]

   ];


    foreach ($arr as $keys => $values ) {
 
 		echo "<br>";

	 	foreach ($values as  $key => $value) {
	 		
	 		echo $keys . $key . "=" . $value . " " ;
	 	} 

	 	echo "<br>";

 }

 	$array = ["a","b","c"];

 	foreach ($array as $key => $value) {
 			echo "$value" . " ";


 			echo "<br>";
 	}
 
 	array_push($array,"d","e");
	foreach ($array as $key => $value) {
 			echo "$value" . " ";


 	}
 
_p($array, '1. Multi');


?>