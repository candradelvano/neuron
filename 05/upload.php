<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $fileSize = $_FILES['file']['size'];
    $type = mime_content_type($_FILES['file']['tmp_name']);
    $fileName = $_FILES['file']['name'];
    //check ukuran file

    //validasi file
    if($fileSize >5000000){
        echo "ukuran file terlalu besar";
    }
    
    if(in_array($type, ['image/jpeg', 'image/png'])){
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$fileName);
        echo "OK";
    }else{
        echo "silahkan pilih extensi yang benar";
    }