<?php

function swatVariabel($param1,$param2){
    echo "Parameter 1 : $param1, Parameter 2 : $param2";

    $swap   = $param1;
    $param1 = $param2;
    $param2 = $swap;

    echo "\nParameter 1 : $param1, Parameter 2 : $param2";
}

echo swatVariabel(10,20);