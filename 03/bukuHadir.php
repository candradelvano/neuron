<?php

namespace candra\lemari\lemari01\kotak02;
include 'laporanBulanan.php';
use candra;
class BukuHadir {
    
    function listKehadiran(){
        $kehadiran = [
            ['tanggal' => '2022-06-03','status_kehadiran' => 'hadir'],
            ['tanggal' => '2022-06-04','status_kehadiran' => 'hadir'],
        ];
        return $kehadiran;
    }

    function displayLaporanBulanan(){
        $objLaporan = new \candra\LaporanBulanan();
        return $objLaporan->getLaporanBulanan();
    }
}