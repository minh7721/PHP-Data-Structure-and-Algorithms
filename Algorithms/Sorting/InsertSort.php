<?php

// In ra tung buoc sap xep trong thuat toan sap xep chen

function insertionSort2($arr) {
    for($i = 1; $i < count($arr) ; $i++){
        $temp = $arr[$i];
        $j = $i -1;
        while($j >= 0 && $arr[$j] > $temp){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $temp;
        foreach($arr as $ar){
            echo $ar." ";
        }
        // echo $arr[0];
        echo "\n";
    }
}

$arr = array(4, 5, 3, 7, 2);
print_r(insertionSort2($arr));
?>