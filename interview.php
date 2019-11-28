<?php

/**
 * 	给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
	你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。

	给定 nums = [2, 7, 11, 15], target = 9
	因为 nums[0] + nums[1] = 2 + 7 = 9
	所以返回 [0, 1]
 */

//时间复杂度O(n2)
//暴力破解
function sum($nums, $target){
	for($i=0;$i<count($nums);$i++){
		for($j=$i+1;$j<count($nums);$j++){
			if($nums[$i] + $nums[$j] == $target){
				return [$i,$j];
			}
		}
	}
}

//
function sum1($nums, $target){
	foreach ($nums as $key => $value) {
		unset( $nums[$key] );
		if( in_array( ($target-$value), $nums) ){
			return [$key, array_search(($target-$value), $nums)];
		}
	}
}

//利用HashMap，遍历数组如果目标数减去当前数的值存在HashMap中，则返回当前索引和差的索引；
//否则将值作为键，索引作为值存入HashMap中
function sum2($nums, $target){
	//声明一个数组作为hashmap
	$arr = [];
	foreach ($nums as $key => $value) {
		if( array_key_exists(($target - $value), $arr) ){
			return [$key, $arr[$target - $value]];
		}
		$arr[$value] = $key;
	}
}


$nums = [30,2,4,59,56,1,30,30];
$target = 60;
$res = sum($nums, $target);
var_dump($res);

$res = sum1($nums, $target);
var_dump($res);

$res = sum2($nums, $target);
var_dump($res);

?>