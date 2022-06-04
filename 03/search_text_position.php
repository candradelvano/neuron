<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mencari Posisi Text Di Dalam Kalimat</title>
    </head>
    <body>
        <?php
            $string = "Anda Beruntung memenangkan pertandingan ini";
            $searchKeyword = "Beruntung";
            $hasil = strpos($string, $searchKeyword);
            $hasil_akhir = $hasil + 1;
            echo $searchKeyword." Berada Pada Posisi : ".$hasil_akhir;
        ?>
    </body>
</html>
    