<?php

$num = 4;
$fact = 1;
$i=1;

for($i=$num; $i >= 1; $i--) {
	$fact *= $i;
}

echo "The Factorial of Number $num is $fact.";
?>
