<?php 
//TRUE; - boolean value
//"true"; string - cannot be used as boolean value (in quotations)
// = is assigned to e.g $x = 2
// == ACTUALLY  equal to e.g. 1==1
// In if statements - 1 = true, 0 = false
// != - not equal e.g if 'input' is not equal to this, then do this (! - NOT)
// || - or 
// && - and
if (true) {
    echo "this is true<br>"; 
}
if (false) {
    echo "this will never be shown<br>";
}
if (!true) {
    echo "this will also never be shown<br>"; 
}
if (!false) {
    echo "this will be shown<br>";
}

$anything = "yes please";

if ($anything == "no please"){
    echo "this will not be shown";
} elseif ($anything == "yes please"){
    echo "this will be shown<br>";
} else {
    echo "this will be the default if none of the above are true";
}

$anything == "no please" ? print("this happens if true") : print("this happens if false");