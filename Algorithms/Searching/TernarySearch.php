<?php
function ternarySearch($l, $r, $key, $arr)
{
    if ($r >= $l)
    {
  
        // Tim vi tri 1/3(mid1) va 2/3(mid2)
        $mid1 = (int)($l + ($r - $l) / 3);
        $mid2 = (int)($r - ($r - $l) / 3);
  
        // Kiem tra key co bang vi tri mid nao khong khong
        if ($arr[$mid1] == $key) 
        {
            return $mid1;
        }
        if ($arr[$mid2] == $key)
        {
            return $mid2;
        }
  
        // Kiem tra xem key dang o trong khoang nao va lap lai cac buoc tren 
        if ($key < $arr[$mid1]) 
        {
            return ternarySearch($l, $mid1 - 1, $key, $arr);
        }
        else if ($key > $arr[$mid2]) 
        {
            return ternarySearch($mid2 + 1, $r, $key, $arr);
        }
        else
        {
            return ternarySearch($mid1 + 1, $mid2 - 1, $key, $arr);
        }
    }
    return -1;
    // echo "<pre>";
    // print_r($arr);
}
  
$arr = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
sort($arr); 
$l = 0;
$r = count($arr);
$key = 1;
$location = ternarySearch($l, $r, $key, $arr);
echo "Vi tri cua ".$key." la ".(int)$location;
