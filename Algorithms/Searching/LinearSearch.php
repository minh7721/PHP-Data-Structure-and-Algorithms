<?php
function linearSearch($arr, $x){
    // $result = array();
    $count = 0;
    for($i =0; $i < count($arr); $i++){
        if($x == $arr[$i]){
            // $result[] = $arr[$i];
            $count++;
        }
    }
    if($count == 0 ){
        echo "Khong tim thay gia tri trong mang";
    }
    else{
        echo "Trong mang co $count gia tri $x";
    }
}


$arr = array(4,6,8,4,3,5,7,0,54,2);


$x = 4;
linearSearch($arr, $x);
?>