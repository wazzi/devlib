<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php

/* 
 * working with multidimensional arrays.
 */

$sales=array(
    array('TRL','Tires','250'),
    array('PLG','Plugs','120'),
    array('FLR','Filters','300'),
    array('BTR','Batteries','190'),
    array('DLR','Drive Shaft','3')
);

//accessing the elements

for($row = 0; $row < 5; $row++){
    for ($col = 0; $col < 3; $col++){
        echo ' | '.$sales[$row] [$col];
    }
    echo ' | <br/>';
}

//using keys for column names 

$items=array(
    array('Code'=>'TRL', 'description'=>'Tires','price'=>400.00),
    array('Code'=>'PLG', 'description'=>'Plugs','price'=>230.00),
    array('Code'=>'SDR', 'description'=>'S-darts','price'=>1400.00)
);

//accessing the elements
echo '<br/>';
for($row=0; $row < 3; $row++){
    echo ' | '.$items[$row]['Code'].' | '.$items[$row]['description'].' | '
        .$items[$row]['price'].' | <br/>';
}