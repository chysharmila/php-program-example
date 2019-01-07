<?php 
	
	// no passing arguments and returning no value
	function sub()
	{
		$a = 120;
		$b = 22;
		$c = $a - $b;
		echo "Subtraction :" .$c;
	}   

// passing no arguments but returning values
	function add()
	{
		$a = 120;
		$b = 22;
		$c = $a + $b;
		return $c;

	} 

	// passing arguments but retrujning no values

	function mul($n1, $n2)
	{
		$multi = $n1 * $n2;
		echo "Multiplication :". $multi;
	}

	function div($n1, $n2)
	{	
		$divi = $n1 / $n2;
		return $divi;
	}

	$n1 = 12;
	$n2 = 2;
	echo "Division :". div($n1, $n2);
	echo "<br>";
	mul($n1, $n2);
	echo "<br>";
	sub();
	echo "<br>";
	echo "Addition :". add();
?>

