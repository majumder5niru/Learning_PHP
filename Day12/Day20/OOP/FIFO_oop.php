<?php
	class Stack{
		private $stackArray = Array();
		private $index = -1;
		public $arrayPosition = 0;
		public function Push($element){
			
			$this->index++;
			$this->stackArray[$this->index] = $element;
		}
		public function pop($position){ 
			if(!$this->isEmpty()){
				if($position>$this->index){
					$arrayPosition = $position - $this->index - 1;
					return $this->stackArray[$arrayPosition];
				}
				else{
					echo "Invalid";
				}
			}
			else{
				echo "Empty stack!! Nothing to pop";
			}
		}
		public function isEmpty(){
			if($this->index == -1){
				return true;
			}
			else{
				return false;
			}
		}
		function First(){
			return $this->stackArray[0];
		}
		function Last(){
			return $this->stackArray[$this->index];
		}
		
	}
	$myStack = new Stack;
	$myStack->push(1);
	$myStack->push(4);
	$myStack->push(5);
	echo "First pop is ", $myStack->pop(3),"<br>";
	echo "Second pop is ", $myStack->pop(4),"<br>";
	echo "Third pop is ", $myStack->pop(5),"<br>";
	echo "First value of stack is ",$myStack->First(),"<br>";
	echo "Last value of stack is ",$myStack->Last(),"<br>";
	//$myStack->pop();
	
	//echo "present index value is ",$myStack->getElement(2);
	
?>