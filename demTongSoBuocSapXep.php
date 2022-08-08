<?php
function runningTime($arr) {
$count = 0;
 for($i = 1; $i < count($arr) ; $i++){
        $temp = $arr[$i];
        $j = $i -1;
        while($j >= 0 && $arr[$j] > $temp){
            $arr[$j + 1] = $arr[$j];
            // $count = $count + $i - $j;
            $count++;
            $j--;
        }
        $arr[$j+1] = $temp;
        // foreach($arr as $ar){
            // echo $ar." ";
        // }
    }
        return $count;
}

$arr = array(4, 5, 3, 7, 2);
print_r(runningTime($arr));

?>