<?php

include 'bukuHadir.php';

use candra\lemari\lemari01\kotak02\BukuHadir as BukuHadir;
$candra = new BukuHadir();
print_r($candra->listKehadiran());
print_r($candra->displayLaporanBulanan());
