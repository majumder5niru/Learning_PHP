<?php
	function isBdphoneNumber($phoneNumber){
		$length = strlen($phoneNumber);
		
		
			if($length==11){
				for($i=0;$i<$length;$i++){
					if($phoneNumber[$i]<'0' || $phoneNumber[$i]>'9'){
						return false;
					}
					
				}
				return true;
			}
			else{
				return false;
			}
		}
		

		class Person{
			public $name = "PHP";
			public $email = "php.net";
			public $phoneNumber = "90xxxxx90";
			
			function setPhoneNumber($phoneNumber){
				if(isBdphoneNumber($phoneNumber)){
					$this->phoneNumber = $phoneNumber;
				}
				else{
					echo "Please provide a valid number.";
				}
			}
		
	}
	
	
	//Inheritence code
	
	
	class Guest extends person{
		public $IndianPhoneNumber = "";
		function setIndianPhoneNumber($phoneNumber){
				if(isBdphoneNumber($phoneNumber.'0')){
					$this->IndianPhoneNumber = $phoneNumber;
				}
				else{
					echo "Please provide a valid number.";
				}
			}
	}
	
	$person1 = new Person;
	$person1->setPhoneNumber("01680583924");
	echo $person1->phoneNumber."<br>";
	
	$guest = new Guest;
	$guest->setIndianPhoneNumber("8008900910");
	echo $guest->IndianPhoneNumber."<br>";
	
	echo $guest->name."<br>";
	echo $guest->email."<br>";
	echo $guest->phoneNumber."<br>";
?>