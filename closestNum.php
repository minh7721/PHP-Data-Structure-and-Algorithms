<?php
function closestNumbers($arr) {
    sort($arr);
    $min = $arr[1] - $arr[0];
    $mins = [1];
    
    for ($i=2; $i < count($arr); $i++) {
        if ($arr[$i] - $arr[$i - 1] < $min) {
            $min = $arr[$i] - $arr[$i - 1];
            $mins = [$i];
        } else if ($arr[$i] - $arr[$i - 1] == $min) {
            $mins[] = $i;
        }
    }
    
    foreach ($mins as $a) {
        echo $arr[$a - 1] . ' ' . $arr[$a] . ' ';
    }
}

$arr = array(-20, -3916237, -357920, -3620601, 7374819, -7330761, 30, 6246457, -6461594, 266854 );
closestNumbers($arr);
?>