<?php


function generatorLoop(iterable $array) 
{
    foreach($array as $item) {
        yield $item;
    }
}

function regularLoop(iterable $array) 
{
    foreach($array as $item) {
        return $item;
    }
}

$elems = generatorLoop(range(0, 3));

foreach($elems as $elem) {
    echo "$elem ";
}

// var_dump($elems);