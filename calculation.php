<!-- program to add two numbers -->
<?php 

	$numfirst = $_REQUEST["firstnum"];
	$numsecond = $_REQUEST["secondnum"];
	$add = $numfirst + $numsecond;

	echo "The addition is:" . $add;

?>