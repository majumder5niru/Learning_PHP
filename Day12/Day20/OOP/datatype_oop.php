<?php
	//I have to play with this code

	class card{
		public $name = "customer";
		protected $card_number = "xxx-xx-xx";
		private $max_balance = 10000;
		
		function max_balance_card()
		{
			echo $this->max_balance."<br>";
		}
		function cardNumber()
		{
			echo $this->card_number."<br>";
		}
	}
	class Platinum extends Card{
		//private max_platinum_balance = 1000000;
		function cardNumber()
		{
			echo $this->card_number;
		}
		function max_balance_card()
		{
			echo $this->max_balance;
		}
	}
	$cardUser = new card;
	echo $cardUser->name = "LKLKJH"."<br>";
	$cardUser->max_balance_card();
	
	$cardUser->cardNumber();
	
	$pla = new platinum;
	$pla->cardNumber();
	$pla->max_balance_card();
?>