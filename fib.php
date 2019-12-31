<?php
/**
 * [fib description]
 * @param  int    $num [description]
 * @return [type]      [description]
 */
//自底而上
function fib(int $num): int{
	if($num <= 0){
		return 0;
	}
	$f1 = 1;$f2 = 1;
	for($i=3;$i<$num;$i++){
		$tmp = $f1;
		$f1 = $f2;
		$f2 = $tmp+$f1;
	}
	return $f1+$f2;
}

function fib2(int $num): int{
	$f=0; $g=1;
	while (0 < $num--) {
		$g = $g+$f;
		$f = $g - $f;
	}
	return $f;
}


//算法时间复杂度高，很慢
//自顶而下
function fib1(int $num): int{
	if($num <= 2){
		return 1;
	}
	return fib1($num-1) + fib1($num-2);
}

$res = fib(50);
var_dump($res);
$res = fib2(50);
var_dump($res);
?>