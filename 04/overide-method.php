<?php
    Class Ortu{
        public function bar(){
            echo "This Function Bar From Class Keluarga";
        }
    }
    Class Child extends Ortu{
        // this function will be override same method from Ortu Class
        public function bar(){
            echo "This Function Bar From Class Child";
        }
    }

    $child1 = new Child();
    $child1->bar();
?>