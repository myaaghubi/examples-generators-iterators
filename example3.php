<?php


// just 5 items
$array = makeMyItems(1, 5);

// var_dump($array);

foreach ($array as $item) {
    processIt($item);
}

function processIt(string $item) 
{
    echo "$item ";
}

function makeMyItems(int $start, int $end)
{
    for ($i=$start; $i <= $end; $i++) { 
        yield "item $i";
    }
}