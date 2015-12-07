<?php

if(isset($_REQUEST['calculate'])){
$operator=$_REQUEST['operator'];
if($operator=='+'){
	$add1=$_REQUEST['fvalue'];
	$add2=$_REQUEST['lvalue'];
	$res=$add1+$add2;
} 
if($operator=='-'){
	$add1=$_REQUEST['fvalue'];
	$add2=$_REQUEST['lvalue'];
	$res=$add1-$add2;
}	
if($operator=='*'){
	$add1=$_REQUEST['fvalue'];
	$add2=$_REQUEST['lvalue'];
	$res=$add1*$add2;
}
if($operator=='/'&& $_REQUEST['lvalue']!=NULL){
	$add1=$_REQUEST['fvalue'];
	$add2=$_REQUEST['lvalue'];
	$res=$add1/$add2;
}
if($_REQUEST['fvalue']==0 && $_REQUEST['lvalue']==0){
	echo "please Enter values";
}	
elseif($_REQUEST['fvalue']==0){
	echo "please enter first value";
}
elseif($_REQUEST['lvalue']==0){
	echo "please enter second value";
}		
}
?>
<form>
<table >
<tr>
<td ">Enter First Number</td>
<td colspan=1><input name="fvalue" type="text" /></td>
</tr>
<tr>
<td>Select Operator</td>
<td>
<select name="operator" style="width:63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
</td>
</tr>
<tr>
<td>Enter Second Number</td>
<td colspan=1><input name="lvalue" type="text" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="calculate" value="calculate"/></td>
</tr>
<tr>
<td>Output = </td>
<td><?php echo $res;?></td>
</tr>
</table>
</form>

 