<?php

$pesanKonfirmasi = "Selamat, Candra Delvano\n
Anda Berhak Mendapatkan Hadiah Mobile ABCD";
echo $pesanKonfirmasi;

//herodoc
$name = "Candra Delvano";
$pesan = <<< TEXT
Selamat, $name
Anda Berhak Mendapatkan Hadiah Mobile ABCD
Silahkan Hubungi Admin
TEXT;
echo $pesan;

// newdoc
$pesan = <<<'TEXT'
Selamat, $name
Anda Berhak Mendapatkan Hadiah Mobile ABCD
Silahkan Hubungi Admin
TEXT;
echo $pesan;
