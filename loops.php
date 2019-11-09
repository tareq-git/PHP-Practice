<?php 


$i=0;
	while ($i <= 9) {
		echo "abc";
		$i++;
}

$i=0;
	do{
		echo "xyz ";
		$i++;
}
	while ($i <= 9);

 	for($i=0; $i <10; $i++) { 
 		echo "$i ";
 }

echo "<br/>";

 	$arr = ["a","b","c"];
 		echo $arr[2];
 
echo "<br/>";

?>

<?php    
$emp = array  
  (  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  }
  echo "<br/>"; 

  echo count($emp); 
   echo "<br/>"; 

  var_dump($emp);

   echo "<br/>"; 

   echo $emp[0][2];


 echo "<br/>";  echo "<br/>"; 

   $arr = [

   		"$a"=>[1,2,3,4],
   		"$b"=>[5,6,7,8],
   		"$c"=>[9,10,11,12]

   ];


    foreach ($arr as $keys =>$values ) {
 
 		//echo $id . " <br>";
	 	
	 	foreach ($values as  $key => $value) {
	 		
	 		echo $keys . " " . $key . " " . $value ;
	 	} 

	 	echo "<br>";

 }

echo "<br/>"; 
 

echo $arr[$a][0];


echo "<br/>"; 


$arrAdd = [0,1,2,3];
$arrAdd = [4=>5];
foreach ($arrAdd as $a) {
	echo $a;
}



 
?> 
