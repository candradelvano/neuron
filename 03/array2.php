<?php

$kendaraan = ['Motor','Mobil', 'Sepeda'];
$kendaraan2 = ['Kijang', 'Honda', 'Yamaha'];
$mergeArray = array_merge($kendaraan, $kendaraan2);
print_r($mergeArray);
if(in_array('Motor', $kendaraan)){
    echo 'ada';
}else{
    echo 'tidak ada';
}

$smartphone = [
    'ram' => '4GB',
    'os' => 'Android 10',
];
if(key_exists('ram', $smartphone)){
    echo 'Key Ram Ditemukan';
}else{
    echo 'tidak ada';
}
