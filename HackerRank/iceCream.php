<?php

function icecreamParlor($m, $arr) {
	for($i = 0; $i < count($arr); $i++){
		for($j = $i+1; $j < count($arr); $j++){
			if($arr[$i] + $arr[$j] == $m){
				echo ($i+1)." ".($j+1);
				echo "\n";
			}
		}
	}
}

$t = 2;
$m1 = 4;
$arr1 = array(1, 4, 5, 3, 2);
icecreamParlor($m1, $arr1);
$m2 = 4;
$arr2 = array(2,2,4,3);
icecreamParlor($m2, $arr2);
?>