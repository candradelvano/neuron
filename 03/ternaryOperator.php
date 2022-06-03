<?php
    $topiSaya = "bundar";
    if($topiSaya != "bundar"){
        echo "Bukan Topi Saya";
    }else{
        echo "Topi Saya";
    }

    // ternary operator
    echo $topiSaya == "bundar" ? "Topi Saya" : "Bukan Topi Saya";

    $nilai = 50;
    echo ($nilai >= 90) ? "Bagus" : ($nilai >= 80 ? 'Bagus':($nilai > 70 ? 'Biasa' : 'jelek'));