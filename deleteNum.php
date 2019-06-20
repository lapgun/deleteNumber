<?php
function deleteNum($arr, $x)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($x === $arr[$i]) {
            unset($arr[$i]);
            $arr[$i]=0;
        }
    }
    return $arr;
}

$arr = [1,2,4, 3, 4, 5, 7, 9, 2];
$x = 2;
var_dump(deleteNum($arr, $x));
?>