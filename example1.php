<?php


// just 5 items
$array = ['item 1', 'item 2','item 3', 'item 4', 'item 5'];

foreach ($array as $item) {
    processIt($item);
}

function processIt(string $item) 
{
    echo "$item ";
}

