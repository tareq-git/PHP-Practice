<?php



// A class start with 'class' keyword ,class name and Body where body are plaches in two curly brace "{}".Class is a blue print.

class Person1{

	public $name;
	public $age;				// Access Modifier + Variable = Properties.
	public $phone;
	public $email;


	//public $name="S.M.Tareq Rahman;
	//public $age=25;

	public function __construct($name,$age,$phone,$email){

			$this -> name = $name;
			$this -> age = $age;
			$this -> phone = $phone;
			$this -> email = $email;


	}


	public function introduce(){

		echo "My name is : " . $this->name  . "<br> " . "My age is :  " .  $this->age . "<br> " . "My phone number is : " . $this->phone . "<br> " . "My emaail is : " . $this->email;

	}




		public function introduce1(){

		echo "My name is : ";

	}

	
}



$personOne = new Person1("Tareq",25,"01855625757","info2.tareq.rahman@gmail.com");  // This is an instances of class.before making object we must declare objects class instance.

/*
	echo "My name is : " . $personOne->name  . "<br> " . "My age is :  " .  $personOne->age . "<br> " . "My phone number is : " . $personOne->phone . "<br> " . "My emaail is : " . $personOne->email  ."<br>". "<br>";
*/

$personOne->introduce();




?>