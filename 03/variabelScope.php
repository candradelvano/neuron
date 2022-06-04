<?php
function localVariable(){
    $umur = 19;
    echo "Local variabel umur = ".$umur;
}

$name = "Candra Delvano";

function globalVariabel(){
    global $name;
    echo "Global variabel nama = ".$name;
}

function staticVariabel(){
    static $var1 = 1;
    $var2 = 1;

    $var1++;
    $var2++;

    echo "Static variabel value = ".$var1;
    echo " Non Static variabel value = ".$var2;
}

echo localVariable();
echo "\n";
echo globalVariabel();
echo "\n";
staticVariabel();
echo "\n";
staticVariabel();