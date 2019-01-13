<?php
	$n = 9;
	$s = 0;
	for($i = 1; $i <= $n; $i += 2){
		$s += $i * $i;
	}
	echo $s.PHP_EOL;

	$i = 1;
	$s = 0;

	while($i <= $n){
		$s+= $i * $i;
		$i+=2;
	}
	echo $s.PHP_EOL;

	$i = 1;
	$s = 0;

	do{
		$s+= $i *$i;
		$i +=2;
	}while($i <= $n);
	echo $s.PHP_EOL;
?>