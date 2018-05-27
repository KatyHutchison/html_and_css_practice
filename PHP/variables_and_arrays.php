<?php 

echo "Hello World!";
// $... variable. Can be changed.
$x = "Peace and Love";
echo $x;

$passportNumber = 9283758593;
echo $passportNumber;

$PIN = 4839;
echo $PIN;

echo $passportNumber*$PIN;

$list = [1,2,3,4,5,6,7,8];
var_dump($list);
// array - variable that contains multiple values. LIST. Each index can be accessed and manipulated. 0 index, 1 value.
// var_dump - dumps the variable to the screen. NOT echo because arrays cannot be echoed, they have multiple values that can be manipulated. 
echo $list[0];

$jeff = [
    "key1" => 'apple',
    "key2" => 'bananananana',
];
var_dump($jeff);

echo $jeff["key1"];

echo $list[0] + 1;

foreach($list as $item) {
    echo $item + 1;
}

