<?php

// Dem so lan xuat hien cua cac so trong mang

function countingSort($arr) {
    $arrOut = array();
    for($i = 0; $i <= max($arr); $i++){
        $arrOut[$i] = 0;    
    }

    for($i = 0; $i <= max($arr); $i++){
        for($j = 0; $j < count($arr); $j++){
            if($arr[$j] == $i){
                $arrOut[$i]++;
            }
        }    
    }
    echo "<pre>";
    print_r($arrOut);
    echo "</pre>";

    //  echo "<pre>";
    // print_r($arrOut);
    // echo "</pre>";

}
$array = array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);

countingSort($array);
