<?php
function minimumLoss($price) {
    $min = abs($price[0] - $price[1]);
    for($i = 0; $i < count($price); $i++){
        for($j =$i + 1; $j < count($price); $j++){
            if($price[$i] - $price[$j] > 0 && $price[$i] - $price[$j] < $min){
                $min = $price[$i] - $price[$j];
            }
        }
    }
    echo $min;
}

$arr = [20, 7, 8, 2, 5];
minimumLoss($arr);

?>