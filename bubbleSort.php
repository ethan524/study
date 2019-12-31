<?php

$n = 0;

function bubbleSort(array &$arr){
	$len = count($arr);
	for($i=0; $i<$len; $i++){
		for($j=$i;$j<$len-1;$j++){
			global $n;
			$n++;
			if($arr[$i] > $arr[$j+1]){
				list($arr[$i],$arr[$j+1]) = [$arr[$j+1],$arr[$i]];
			}
		}
	}
	var_dump($n);
}

function sorted(array &$arr){
	$lo = 0;
	$hi = count($arr);
	$sorted = true;
	while(++$lo < $hi){
		global $n;
		$n++;
		if($arr[$lo-1] > $arr[$lo]){
			$sorted = false;
			list($arr[$lo],$arr[$lo-1]) = [$arr[$lo-1], $arr[$lo]]; 
		}
	}
	return $sorted;
}

function bubbleSort2(array &$arr){
	while (!sorted($arr)) {
	}
	global $n;
	var_dump($n);
}

// $arr = [1,1,2,3,0,19,234,9012,34,912,3048,0,91];
// bubbleSort2($arr);
// var_dump($arr);

class Test
{
	public $arr = [1,1,2,3,0,19,234,9012,34,912,3048,0,91];
	public $n = 0;

	public function bubbleSort(){
		$arr = $this->arr;
		$len = count($arr);
		for($i=0; $i<$len; $i++){
			for($j=$i;$j<$len-1;$j++){
				$this->n++;
				if($arr[$i] > $arr[$j+1]){
					list($arr[$i],$arr[$j+1]) = [$arr[$j+1],$arr[$i]];
				}
			}
		}
		var_dump($this->n);
	}

	public function bubbleSort2(){
		$sorted = true;
		while (!$sorted) {
			$lo = 0;
			$hi = count($arr);
			$sorted_ = true;
			while(++$lo < $hi){
				var_dump(123);
				$this->n++;
				if($arr[$lo-1] > $arr[$lo]){
					$sorted_ = false;
					list($arr[$lo],$arr[$lo-1]) = [$arr[$lo-1], $arr[$lo]]; 
				}
			}
		}
		var_dump($this->n);
	}

	private function bubble(array $arr){
		$lo = 0;
		$hi = count($arr);
		$sorted = true;
		while(++$lo < $hi){
			$this->n++;
			if($arr[$lo-1] > $arr[$lo]){
				$sorted = false;
				list($arr[$lo],$arr[$lo-1]) = [$arr[$lo-1], $arr[$lo]]; 
			}
		}
		return $sorted;
	}

}

$test = new Test();
// $test->bubbleSort();
$test->bubbleSort2();

?>