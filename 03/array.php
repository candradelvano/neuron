<?php

$kendaraan = ['Motor ', 'Mobil ', 'Sepeda '];
echo "Jumlah item pada array kendaraan adalah : " . count($kendaraan);
print_r($kendaraan);
$removeSpaceArray = array_map('trim', $kendaraan);
print_r($removeSpaceArray);
$upperArray = array_map('strtoupper', $removeSpaceArray);
print_r($upperArray);

$rangeGaji = [4000000,5000000,10000000];
function rupiah($jumlah){
    return number_format($jumlah, 0, ',', '.');
}

print_r(array_map('rupiah', $rangeGaji));