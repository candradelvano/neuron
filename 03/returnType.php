<?php

class Process{
    function returnInteger(){
        return 10;
    }
    function returnArray():array{
        return ['one', 'two', 'three'];
    }
    function returngString():string{
        return 'some string';
    }
}

$integer = new Process();
echo $integer->returnInteger();

$integer = new Process();
$integer->returnInteger();