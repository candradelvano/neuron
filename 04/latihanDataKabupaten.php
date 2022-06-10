<?php

    $listProvinsi = [
        'ACEH' => [
            'KABUPATEN SIMEULUE',
            'KABUPATEN ACEH SELATAN',
            'KABUPATEN ACEH TIMUR',
            'KABUPATEN ACEH TENGAH',
            'KABUPATEN ACEH BARAT',
            'KABUPATEN ACEH UTARA',
            'KABUPATEN PIDIE',
            'KABUPATEN BANDAR LAMPUNG',
            'KABUPATEN ACEH BARAT DAYA',
            'KABUPATEN LANGSA',
            'KABUPATEN LAMPUNG SELATAN',
            'KABUPATEN LAMPUNG UTARA',
            'KABUPATEN BENGKULU',
            'KABUPATEN BENGKULU SELATAN',
            'KABUPATEN BENGKULU TENGAH',
        ],
        'JAWA BARAT' => [
            'KABUPATEN BANDUNG',
            'KABUPATEN BANDUNG BARAT',
            'KABUPATEN BANDUNG TENGAH',
            'KABUPATEN BANDUNG TIMUR',
            'KABUPATEN BANDUNG UTARA',
            'KABUPATEN CIAMIS'
        ]
    ];
    echo json_encode($listProvinsi[$_GET['provinsi']]);

?>