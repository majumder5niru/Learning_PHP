<?php
	class Person{
		private $name = "KJKHJ";
		public function __construct($name){
			echo "My class is " .__class__."<br>";
			$this->name = $name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function printName(){
			echo $this->name;
		}
	}
	$d = new Person("nirupam");
	$d->printName();
?>