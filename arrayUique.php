<?php

/**
 * [disordered ]
 * 判断数组是否为有序向量
 * 循环比较每一对元素(相邻的两个元素)
 * 如果整个数组是有序数组，那么相邻的两个元素必然是有序的，
 * 如果整个数组是无序数组，那么必然有一对或多对元素是无序的
 * 所以在循环中通过判断相邻两素元素是否有序就可以得知整个数组是否有序
 * 相邻逆序对的数目就是整个数组的逆序程序
 * @param  array  $arr [description]
 * @return [type]      [description]
 */
function disordered(array $arr): int{
	$len = count($arr);
	$n = 0;
	for($i=1; $i<$len; $i++){
		$n += ($arr[$i-1] > $arr[$i]);
	}
	return $n;
}

/**
 * [arrUnique 数组去重]
 * 有序数组版
 * 有序数组去重，重复的元素必然是arr[i]~arr[j]之间的元素。
 * 如果arr[i]!=arr[j]，则将arr[j]的值赋予arr[i+1],因为arr[i]~arr[j]之间的值都是与arr[i]重复的元素。然后将i+1,
 * 最后的i的值就是去重之后的实际的数组的个数，可以根据i对数组进行切除
 * @param  array  $arr [description]
 * @return [type]      [description]
 */
function arrUnique(array $arr): array{
	sort($arr);
	$i = 0; $j = 0;
	$len = count($arr);
	while(++$j < $len){
		if($arr[$i] != $arr[$j]){
			$arr[++$i] = $arr[$j];
		}
	}
	$arr = array_slice($arr, 0,$i+1);
	return $arr;
}

/**
 * [arrUnique2 数组去重]
 * 无序数组版 -- 不使用array_unique
 * @param  array  $arr [description]
 * @return [type]      [description]
 */
function arrUnique2(array $arr): array{
	foreach ($arr as $key => $value) {
		$data[$value] = $key;
	}
	return array_keys($data);
}

$arr = [1,1,4,7,3,5,7,9,0,4,2,3,4,5,6,7,8,9];
$res = arrUnique($arr);
$res = arrUnique2($arr);
var_dump($res);

?>