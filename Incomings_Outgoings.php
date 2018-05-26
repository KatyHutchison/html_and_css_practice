<?php 
setlocale(LC_MONETARY, 'en_GB');
// list of bills
$bills = [
    "mortgage" => 564.79,
    "fuel" => 200.00,
    "food" => 320.00,
    "utilities" => 89.00,
    "water" => 40.00,
    "credit_card" => 79.00,
    "unison" => 9.70,
    "vodafone_Katy" => 22.00,
    "vodafone_Adam" => 20.00,
    "Sky" => 18.99,
    "Zurich" => 10.16,
    "Council Tax" => 132.65,
    "childcare" => 520.00,
    "National Trust" => 9.00,
    "Car_Tax" => 11.81,
];
// total for bills
$bills_total = null;
foreach ($bills as $bill) {
    $bills_total += $bill;
}
$formatted_bills_total = money_format('%.2n', $bills_total);
echo "total bills = $formatted_bills_total <br>";

// list of income
$incomes = [
    "Adam" => 1750.36,
    "Katy" => 999.00,
];
// total for income
$income_total = null;
foreach ($incomes as $income) {
    //income_total = income_total + income (income_total not defined untilthe income has been added to it, and is redefined before adding the next income)
    $income_total += $income;
}
$formatted_income_total = money_format('%.2n', $income_total);
echo "total income = $formatted_income_total <br>";

// calculation for incomings-outgoings
$disposable_income = money_format('%.2n', $income_total-$bills_total);
echo "disposable income = $disposable_income";
