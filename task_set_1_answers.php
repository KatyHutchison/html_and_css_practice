<?php 

// Task 1
// create an array containing the values 1-10
$numbers = [1, 2, 3, 4, 5, 6, 7, 9, 10];

// loop through the array and print all values
foreach ($numbers as $number) {
    echo "$number<br>";
}

// Task 2
// loop through the array and print all even numbers AND the number 7
foreach ($numbers as $number) {
    if ($number != 1 || $number != 3 || $number != 5 || $number != 9) {
        echo "$number<br>";
    }
}

// Task 3 (TrickyMcTrickster question)
// given the following array $familyAgesInYears. Write code that calculates and prints our combined age in months 

$familyAgesInYears = [
    'Daddy' => 30,
    'Mummy' => 29,
    'Aurla' => 1.5
];

$familyAgesInMonths = null;

foreach ($familyAgesInYears as $age){
    $familyAgesInMonths += $age * 12;
}

echo "Family age in months is $familyAgesInMonths";