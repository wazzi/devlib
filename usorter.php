<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php

/* 
User defined sorting
 */

$sales=array(
    array('TRL','Tires','250'),
    array('PLG','Plugs','120'),
    array('FLR','Filters','300'),
    array('BTR','Batteries','190'),
    array('DLR','Drive Shaft','3')
);

sort($sales);

//for every row in this array...
for($row=0;$row<5;$row++){
    //get the info in columns...
    for($col=0;$col<4;$col++){
        echo ' '.$sales[$row][$col]." ";
    }
    echo '<br/>';
}

    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
/**
 * Other array manipulations
 */
$tracks=array('Soho Riots','Sea of Love','Pink Rabbits','Sorrow');

echo "Showing all tracks in the array...<br/>===================================<br/>";
foreach ($tracks as $value) {
    echo "$value, ";  
}
echo "<br/>===================================<br/>";

//reset the array(move pointer to start...)
reset($tracks);
//calling current returns the first element(the pointer is already on the first
// element)
$curr_element=  current($tracks);
echo "The pointer is currently at track: $curr_element";

    echo '<br/>';
//calling each() returns the current element before 
//advancing the pointer to the next element
    each($tracks);
echo "After calling each(), the pointer is at track: ". current($tracks);
    
echo '<br/>';
//calling next() advancing the pointer to the next element
//nad returns the new element.
//reset($tracks);
next($tracks);
    $curr_element3=  current($tracks)  ;
echo "After resetting and calling next(), the pointer is at track: $curr_element3";

echo '<br/>';
//send pointer to the end
end($tracks);
echo "end() called, the pointer is now at track:".current($tracks);

/**
 * using end and prev() to loop reversely through an array
 * 
 */
echo '<br/>';
echo '<br/>';
echo 'Elements of the array in reverse order.'.'<br/>';
$reversed=  end($tracks);
while($reversed){
    echo "$reversed, ";
    $reversed=  prev($tracks);
}

/**
 * Using array_walk();
 * similar to interface in java as it requires a user defined function that will
 * be called on all elements of a specified array.
 */

echo "<br/>";
echo "<br/>";
//define the function
function format_x($value){
    echo "<strong>$value</strong><br/>";
}
//call array_walk  and specify function to be used on array elements
array_walk($tracks, 'format_x');


echo "<br/>";
//get the number of elements in the array
count($reversed);
$sizeof = sizeof($var, 1);
echo "Elements in the array: ".count($tracks);

//array_count() returns the number of times each unique value occurs in the array
echo "<br/>";
echo "Getting the frequency table for elements in an array";
echo "<br>===============================<br/>";
echo "Element  Occurences<br/>";
$numbers=array(4,6,2,2,4,6,7,1,9,1,3,);
$fc=  array_count_values($numbers);
foreach ($fc as $key => $value) {
    echo "$key   $value<br/>";
}

//extracting values of an array into scalar variables
echo "<br/>";
echo "<br/>";
$array=array('key1'=>'lerato','key2'=>'orlando','key3'=>'uhuru','key4'=>'mafikizolo');
extract($array);
echo "$key1<br/> $key2<br/> $key3<br/> $key4<br/>";