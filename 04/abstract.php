<?php
    // Abstract adalah sebuah class yang abstrak method tidak diimplementasikan pada classnya itu sendiri

    abstract class Car{
        abstract public function turnOnMachine($merk);
    }

    Class Audi extends Car{
        public function turnOnMachine($merk){
            return 'Turn On Machine Car '.$merk;
        }
    }

    $audi = new Audi();
    echo $audi->turnOnMachine('Audi');

?>