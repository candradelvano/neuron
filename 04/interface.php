<?php
    interface Crud{
        public function get();
        public function create();
        public function update();
        public function delete();
    }
    Class CrudBarang implements Crud{
        public function get(){
            echo "Display all records";
        }
    }
    $crudBrg = new CrudBarang();
    $crudBrg->get();
?>