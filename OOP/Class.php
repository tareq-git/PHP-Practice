<?php


// A class start with 'class' keyword ,class name and Body where body are plaches in two curly brace "{}".Class is a blue print.

class Person{

	public $name;
	public $age;				// Access Modifier + Variable = Properties.
	public $phone;
	public $email;


	//public $name="S.M.Tareq Rahman;
	//public $age=25;

/*	public function __construct($name,$age,$phone,$email){

			$this -> name = $name;
			$this -> age = $age;
			$this -> phone = $phone;
			$this -> email = $email;

	}*/

	//This is called method. method contaions access modifier("public,private,protected"),"function" keyword,method name("Here personName is a method name"),and a body between two curly brace"{}".

	public function personName($nameVal){			// here $nameVal is perameter or argument.

		echo "The Person name is :".$this->name=$nameVal . "<br>";

	}

	public function personAge($ageVal){

		echo "The Person age is :". $this->age = $ageVal . "<br>";

	}


		public function personphone($phoneVal){

		echo "The Person phone is :".$this->phone = $phoneVal . "<br>";

	}

	public function personEmail($ageVal){

		echo "The Person age is :".$this->age=$ageVal . "<br>";

	}


}

$personOne = new Person;  // This is an instances of class.before making object we must declare objects class instance.

//echo $personOne->name="S.M.Tareq Rahman <br>";
//echo $personOne->age=30;



 $personOne->personName("S.M.Tareq Rahman");		//This all are object of person class.
 $personOne->personAge(30);
  $personOne->personphone("01855625757");
   $personOne->personEmail("info2.tareq.rahman@gmail.com");

?>