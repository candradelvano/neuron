<?php
    $fruits = ['apple', 'banana', 'orange'];
    $serialized = serialize($fruits);
    echo $serialized;
    echo '<br>';
    $unserialized = unserialize($serialized);
    print_r($unserialized);
?>