<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Format String Dan Integer</title>
    </head>
    <body>
        <?php
            $jumlah = 100000000;

            function rupiah($jumlah) {
                $hasil = "Rp " . number_format($jumlah, 0, ',', '.');
                return $hasil;
            }
            echo rupiah($jumlah);
            echo "<br>";
            $string = "hello world";
            echo strtoupper($string);
            echo "<br>";
            echo strtolower($string);
            echo "<br>";
            echo substr($string, 1, 4);
        ?>
    </body>
</html>
    