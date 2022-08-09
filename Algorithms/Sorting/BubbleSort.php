<?php
function bubleSort($arr) {
    $swap = 0;
    $countArr = count($arr);
    for ($i = 1; $i < $countArr; $i++) {
        for ($j = $countArr - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
                $swap++;
            }
        }
    }

    echo "So buoc phai lam la: $swap";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

}

$arr = array(4,6,8,4,3,5,7,0,54,2);
bubleSort($arr);

?>