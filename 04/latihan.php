<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Latihan 1</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <select id="pilih_provinsi">
            <option value="">Pilih Provinsi</option>
        </select>
        <select id="pilih_kabupaten">
            <option value="">Pilih Kabupaten</option>
        </select>
    </body>
</html>

<script>

    $.get("latihanDataProvinsi.php", {
        getProvinsi: true
    }, function(data) {
        var data = JSON.parse(data);
        $.each(data, function(index, value) {
            $("#pilih_provinsi").append("<option value='" + value + "'>" + value + "</option>");
        });
    });

    //if change pilih_provinsi
    $("#pilih_provinsi").change(function() {
        $("#pilih_kabupaten").empty();
        var provinsi = $(this).val();
        $.get("latihanDataKabupaten.php", {
            provinsi: provinsi
        }, function(data) {
            var data = JSON.parse(data);
            $.each(data, function(index, value) {
                $("#pilih_kabupaten").append("<option value='" + value + "'>" + value + "</option>");
            });
        });
    });

</script>

