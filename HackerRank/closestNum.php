<?php
//in ra hieu giua 2 so nho nhat

function closestNumbers($arr) {
    sort($arr);
    $min = $arr[1] - $arr[0];
    $mins = [1];
    print_r($mins);
    
    for ($i=2; $i < count($arr); $i++) {
        if ($arr[$i] - $arr[$i - 1] < $min) {
            $min = $arr[$i] - $arr[$i - 1];
            $mins = [$i];
            echo "<br>";
            print_r($mins);
        } else if ($arr[$i] - $arr[$i - 1] == $min) {
            $mins[] = $i;
            echo "<br>";
            print_r($mins);
        }
    }
    echo "<br>";
    
    print_r($mins);
    echo "<br>";
    foreach ($mins as $a) {
        echo $arr[$a - 1] . ' ' . $arr[$a] . ' ';
    }
}

$arr = array(-20, -3916237, -357920, -3620601, 7374819, -7330761, 30, 6246457, -6461594, 266854, -520, -470 );
closestNumbers($arr);
?>