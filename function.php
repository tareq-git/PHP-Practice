<?php

function hello(){
	echo "Hello world";
}

hello();

echo "<br/>";


function name($fName,$lName){
	echo "$fName $lName";
}

name(Tareq,Rahman);
	echo "<br/>";

function age($Age=20){
	echo "My age is $Age" . "<br/>";
}

age();
age(25);

?>