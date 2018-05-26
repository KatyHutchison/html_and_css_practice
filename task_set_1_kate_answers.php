<?php 

// Task 1
// create an array containing the values 1-10
// loop through the array and print all values

// Task 2
// loop through the array and print all even numbers AND the number 7

// Task 3 (TrickyMcTrickster question)
// given the following array $familyAgesInYears. Write code that calculates our combined age in months 

$ages = [
    'Daddy' => 30,
    'Mummy' => 29,
    'Aurla' => 1.5
];

$total_age = null;
foreach ($ages as $age) {
    $total_age += $age * 12;
}
echo "$total_age <br>";

 //task 1
 // "..." - prints the value of a variable
 // '...' - prints what is inside the quotations
$values = [1,2,3,4,5,6,7,8,9,10];
foreach ($values as $adam) {
    echo "$adam <br>";
}

//task 2
foreach ($values as $value) {
    if (($value % 2) == 0 || $value == 7 ) {
        echo "$value<br>";
    }
}

//task 3