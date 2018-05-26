<?php

include "DBSales.php";

//the above include statement imports two pre-defined variables (you can view the code for this in DBSales.php if you want to)
//$sale_values is an array containing sale values 
//$payment_methods is an array containing the payment method for each sale

//Task 1
//var dump both $sale_values and $payment_methods so you are able to inspect their format

//Task 2
//use $sale_values to calculate the total of all the sales in the array

//Task 3
//use $payment_methods to find the number of sales that were paid for using paypal

//Task 4
//use both $payment_methods and $sale_values to create a new array that contains the values of only the paypal sales
//I'll help you with this one :)

//Task 1

var_dump($sale_values);

var_dump($payment_methods);

//Task 2

$sale_value_total = null;
foreach ($sale_values as $sale_value) {
    $sale_value_total += $sale_value;
}
echo "$sale_value_total <br>";


//Task 3
$paypal_total = null;
foreach ($payment_methods as $payment_method) {
   if ($payment_method == "paypal") {
        $paypal_total += 1;  
    }
}
echo "$paypal_total <br>";

//Task 4
$paypal_sale_values = [];

foreach ($payment_methods as $key => $method) {
    if($method == 'paypal') {
        $paypal_sale_values[$key] = $sale_values[$key];
    }
}
var_dump($paypal_sale_values);

