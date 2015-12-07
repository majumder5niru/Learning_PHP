<?php
	include "contactBD.php";
	echo '<table border="1">';
	echo"<tr><th width='100'>Name</th><th width='100'>Salary</th><th width='100'>CarName</th><th width='100'>Company</th></tr>"; 
	$cdb = new ContactBD();
	$cdb->employeeTable(1,1);
	$cdb->employeeTable(2,2);
	$cdb->employeeTable(3,3);
	$cdb->employeeTable(3,1);
	$cdb->employeeTable(2,1);
	$cdb->close();
	echo "</table>";
?>