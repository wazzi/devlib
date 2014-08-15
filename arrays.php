<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//creates an array and dynamically adds elements on any subsequent 
//reference i.e products 1
$products[0]='Skicky Pads';
$products[1]='Biro Pens';

echo "$products[0], $products[1]";

//loop through all arrays
echo '<br/>';
for($i=0;$i<3;$i++){
    echo "$products[$i]";
}

//using the array function to create an array
$items= array('JP','KS','AB','VX','TJ');
echo "<br>";
echo $items[4];


$items2= range(1,20);//create and fill an array with numbers 1- 20
$items3= range(1,30,2);//create, fill and step an array (the size for odd numbers only)
$items4= range('a','z');//create, fill an array (fill with alphabet letter)

echo "<br/>";
foreach ($items4 as $value) {
echo " ";
echo $value;
}


//creating arrays with key for idices
echo "<br>";
$prices=array('Prestige'=>85.30, 'Stars Loaf'=>50.00, 'Panga BarSoap'=>85.00);
//accessing all values using foreach()
//can also use each() or list() function
foreach ($prices as $key=>$value) {
    echo $key." - ".$value."<br/>";    
}

//using each(): returns the currrent element in the array and make the next one current
//using in a while loop makes it go through all the elements in the array
echo "<br>";    
while($var = each($items3)){
    echo $var['key'];
    echo " ***** ";
    echo $var['value'];
    echo " <br/>";
}

echo "<br/>";
//using list() to loop split array into values
while(list($index,$val)=each($items)){
    //each() takes the current element from $prices  and returns it as an array
    //and makes the next element current.
//    list() turns the 0 and 1 returned by each into new variables called 
    //$prduct and $price
    echo "$index - $val </br>";
}

//array operators

$users=  array('henri'=>'user123','greg'=>'refres');
$new_users=  array('jack'=>'rexxy','kim'=>'triest','razi'=>'gred1323','henri'=>'user123');

$registered_users=  array('henri','greg','allex','fredy');
$blocked_users=  array('henri','greg','allex');

echo '<br/>';
//check if the two arrays contain the same elements same as !=
if($users<>$registered_users){
    echo 'users and registered users are not the same';
}
//check if the two arrays contain the same elements
echo '<br/>';
if($users===$blocked_users){
    echo 'users and blocked_users are the same with the same types';
}
echo '<br/>';
//union contents of the arrays; duplicate keys are removed.
$total_users=$users+$new_users;

foreach ($total_users as $value) {
    echo "$value ";
}

