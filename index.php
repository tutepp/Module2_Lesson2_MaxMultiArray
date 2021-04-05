<?php
$array = [
    [0,2,5,8,9,11],
    [9,8,5,11,99,34],
    [13,7,24,57,8,4]
];
function checkMax($array){
    $max = $array[0][0];
    for($i = 0;$i<=count($array); $i++){
        for($j=0;$j<=count($array[$i]);$j++) {
            if ($max < $array[$i][$j]) {
                $max = $array[$i][$j];
            }
        }
    }
    return $max;
}
echo ("gia tri lon nhat la"." ".checkMax($array));
