<?php

function sumRecursion(int $n): int{
	if($n < 1){
		return 0;
	}
	return sumRecursion($n-1) + $n-1;
}

function sumFor(int $n): int{
	$sum = 0;
	for($i=1;$i<=$n;$i++){
		$sum+=$i;
	}
	return $sum;
}

function sum(int $n): int{
	return ($n+1) * $n / 2;
}

$number = 10000000;
$t1 = microtime(true);
$res = sum($number);
$t2 = microtime(true);
echo '耗时'.round($t2-$t1,3).'秒';
var_dump($res);

?>