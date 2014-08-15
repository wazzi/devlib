<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$stations=array('BBC World Service', 'Nation FM', 'Kiss FM', 'XFM', 'KBC Radio', 'Capital FM');

//display array before sorting...
echo "Array before sorting<br/>";
echo "==============================<br/>";
while(list($key,$value)=  each($stations)){
    echo $key."   ".$value.'<br/ >';
}

//NB: the sort function is case sensitive so all uppercase letters 
//come before lowercase letters. Z will come before a.
//Constants SORT_REGULAR, SORT_STRING and SORT_NUMERIC can be used as an optional 
//parameter to the sort() method.
//important when sorting strings that contain numerics.

echo "<br/>Array after sorting<br/>";
echo "==============================<br/>";
sort($stations);
while(list($key,$value)=  each($stations)){
    echo $key."   ".$value.'<br/ >';
}

//sorting arrays with keys

    echo "<br/>Sorting arrays by key and value<br/>";
    echo '===============================<br/>';
    echo 'Unsorted<br/>';
    echo '===============================<br/>';
$rating=array('Lavington'=>3,'Sukari'=>2,'Runda'=>1,'Kileleshwa'=>4);
foreach($rating as $key => $val ){
    echo "$key --- $val<br/>";
}
 
//sort by key
ksort($rating);
    echo '<br/>===============================<br/>';
    echo 'Sorted by Keys';
    echo '<br/>===============================<br/>';
foreach($rating as $key => $val ){
    echo "$key --- $val<br/>";
}

//sort by value
asort($rating);
    echo '<br/>===============================<br/>';
    echo 'Sorted by Values';
    echo '<br/>===============================<br/>';
foreach($rating as $key => $val ){
    echo "$key --- $val<br/>";
}
    
