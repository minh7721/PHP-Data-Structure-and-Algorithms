<?php
function binary_search($arr, $x) {
    $min_index = 0;
    $max_index = count($arr) - 1;
    $count = 0;
    for($i = 0; $i <= $max_index; $i++){
        $currentIndex = floor(($min_index + $max_index ) / 2); 
        $currentElement = $arr[$currentIndex];
        if ($arr[$i] == $x) {
            echo "Vi tri cua X trong mang la $i <br>";
            $count++;
        } else if ($currentElement < $x) {
          $min_index = $currentIndex + 1;
        } else if ($currentElement > $x) {
          $max_index = $currentIndex - 1;
        }
    }
        echo "<br>";
        echo "Gia tri X $currentElement";
        echo "<br>";
        echo "So lan lap lai cua X $count";
}
  $array = [1,2,3,5,9];
sort($arr); 
  $x = 3;
  binary_search($array, $x);
?>