<?php

function arr_inv($numero = 1)
{
    $arr = [];
    for ($i = $numero; $i >= 0; $i--) {
        array_push($arr, $i);
    }
    return $arr;
}

var_dump(arr_inv());
var_dump(arr_inv(6));
