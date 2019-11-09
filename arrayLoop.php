
<?php
//Create array.
$cities=array(
  "Tokyo",
  "Mexico City",
  "New York City",
  "Mumbai",
  "Seoul",
  "Shanghai",
  "Lagos",
  "Buenos Aires",
  "Cairo",
  "London" 
  );

echo $arrlength = count($cities) . "<br/>";

for ($i=0; $i < $arrlength; $i++) { 
      echo "$cities[$i]";
      echo "<br>";

  }
 
 echo "<br>";
//Print values of array to browser, separated by commas. 
foreach($cities as $c){
  echo "$c, ";

}
 
//Sort array.
sort($cities);
 
//Print array as bulleted list.
echo "\n<ul>\n" ;
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>" ;
 
//Add four cities to array.
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;
 
//Sort again, and print bulleted list.
sort($cities);
echo "\n<ul>\n";
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>";
?>