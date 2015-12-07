<?php
	include "C:/xampp/htdocs/xampp/Training/php/myFunction/own_sorting_function.php";
	class SortArrray{
		public $arr = array();
		function setArrayAscending($arr){
			$result = sortAscending( $arr);
			$this->arr = $result;
			return $this->arr;
		}
		function setArrayDisscending($arr){
			$result = sortDiscending( $arr);
			$this->arr = $result;
			return $this->arr;
		}
	}
	$find_ascending = new SortArrray();
	$find_ascending->setArrayAscending(12,87,97,0,65);
	print_r($find_ascending->arr);
	
	$find_discending = new SortArrray();
	$find_discending->setArrayDisscending(12,87,97,0,65);
	print_r($find_discending->arr);
	
?>