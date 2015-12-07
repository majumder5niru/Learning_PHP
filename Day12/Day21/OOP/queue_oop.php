<?php
	class Queue{
		private $queueArray = Array();
		private $index = -1;
		public function Push($element){
			//print_r(array_push($this->queueArray,$element));
			$this->index++;
			 array_unshift($this->queueArray,$element);
		}
		public function Pop(){ 
			if(!$this->isEmpty()){
				return $this->queueArray[$this->index--];
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
			return $this->queueArray[$this->index];
		}
		function Last(){
			return $this->queueArray[0];
		}
		
	}
	$myQueue= new Queue;
	$myQueue->push(1);
	$myQueue->push(4);
	//$myQueue->push(5);
	//echo "First pop is ", $myQueue->pop(),"<br>";
	//echo "Second pop is ", $myQueue->pop(),"<br>";
	//echo "Third pop is ", $myQueue->pop(),"<br>";
	//echo "First value of stack is ",$myQueue->First(),"<br>";
	//echo "Last value of stack is ",$myQueue->Last(),"<br>";
	//$myStack->pop();
	
	
	
?>