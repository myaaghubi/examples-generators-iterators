<?php


// just 5 items
$array = ['item 1', 'item 2','item 3', 'item 4', 'item 5'];


// foreach ($myIterator as $item) {
//     processIt($item);
// }

function processIt(string $item) 
{
    echo "$item ";
}

$myArrayIterator = new ArrayIterator($array);

$myArrayIterator->seek(3);
$myArrayIterator->append('item 12');

while ($myArrayIterator->valid()) {
    processIt($myArrayIterator->current());
    $myArrayIterator->next();
}