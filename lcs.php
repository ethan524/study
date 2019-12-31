<?php

function lcs(string $str1, string $str2): string{
	$res = [];
	for($i=0; $i<strlen($str1); $i++){
		for($j=0; $j<strlen($str2); $j++){
			if($str1[$i] == $str2[$j]){
				$res[] = $str1[$i];
			}
		}
	}
	return implode(',', $res);
}

$str1 = "didactical";
$str2 = "advantage";
$res = lcs($str1, $str2);
var_dump($res);

?>