<?php

function icecreamParlor($t, $m1, $arr1, $m2, $arr2) {
    // Write your code here
	for($i = 0; $i < count($arr1); $i++){
		for($j = $i+1; $j < count($arr1); $j++){
			if($arr1[$i] + $arr1[$j] == $m1){
				echo ($i+1)." ".($j+1);
				echo "\n";
			}
		}
	}
	
	for($i = 0; $i < count($arr2); $i++){
		for($j = $i+1; $j < count($arr2); $j++){
			if($arr2[$i] + $arr2[$j] == $m2){
				echo ($i+1)." ".($j+1);
				echo "\n";
			}
		}
	}
}

$t = 2;
$m1 = 4;
$arr1 = array(1, 4, 5, 3, 2);
$m2 = 4;
$arr2 = array(2,2,4,3);

icecreamParlor($t, $m1, $arr1, $m2, $arr2);

?>