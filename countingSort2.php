<?php

function countingSort($arr){
    sort($arr);
    for($x = 0; $x < count($arr); $x++) {
        echo $arr[$x]." ";
      }
}

$array = array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);

countingSort($array);
?>