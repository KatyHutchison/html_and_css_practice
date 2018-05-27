<?php

include "DBSales.php";

//the above include statement imports two pre-defined variables (you can view the code for this in DBSales.php if you want to)
//$sale_values is an array containing sale values 
//$payment_methods is an array containing the payement method for each sale

//Task 1
//var dump both $sale_values and $payment_methods so you are able to inspect their format
var_dump($sale_values);
var_dump($payment_methods);

//Task 2
//use $sale_values to calculate the total of all the sales in the array then print it out
$sales_total = null;

foreach ($sale_values as $sale) {
    $sales_total += $sale;
}

echo "Total sales = £$sales_total<br>";

//PHP also has a built in function to do  this
$sales_total_2 = array_sum($sale_values);

echo "$sales_total_2<br>";

//Task 3
//use $payment_methods to find the number of sales that were paid for using paypal and print it out
$paypal_order_total = null;

foreach ($payment_methods as $method){
    if($method == 'paypal') {
        $paypal_order_total += 1;
        // this can also be achieved using $paypal_order_total++ which increments the variable by 1
    }
}

echo "Total paypal payments = $paypal_order_total";

//Task 4 I'll help you with this one :)
//use both $payment_methods and $sale_values to create a new array that contains the values of only the paypal sales. 
//var_dump the new array

$paypal_order_values = [];

foreach ($payment_methods as $key => $method) {
    if ($method == 'paypal') {
        $paypal_order_values[$key] = $sale_values[$key];
    }
}

var_dump($paypal_order_values);
