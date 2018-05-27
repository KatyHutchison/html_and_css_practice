<?php

//Database connection
$dbh = new PDO('mysql:host=localhost;dbname=pq','root','');

$sales = $dbh->query('SELECT * FROM orders');

$sale_values = [];
$payment_methods = [];

foreach ($sales as $sale) {
    array_push($sale_values, floatval($sale['sale_value']));
    array_push($payment_methods, ($sale['payment_method']));
}



