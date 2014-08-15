<link rel="stylesheet" href="css/styler.css" type="text/css"/>
<?php

/* 
 * shuffling the contents of an array to show elements at random.
 * 
 */

//create an array of images
$pictures=array('lark.png','minter.png','ubuntu.png','firefox.png','android.jpg');

//shuffle the images
shuffle($pictures);
$location="pics/";
?>
<html>
    <head></head>
    <body>
        <?php
        //loop through all pictures displaying each...
        for($i=0; $i< 5;$i++){
                 echo   "<img src=$location"."$pictures[$i] width=\"100\" height=\"100\"/>";
        }
echo "<br>";
        ?>
    </body>
</html>

<?php
//reversing contents in an array
echo "<br>";
$original=range(1,20);
//show the array (range creates the array in ascending order)
foreach ($original as $value) {
    echo "$value ";
}

///reverse the contents; rsort() can also be used
$reversed=array_reverse($original);
//show the reverse
echo "<br>";
foreach ($reversed as $value) {
    echo "$value ";
}
echo "<br>";

//manually create a reversed array

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$numbers=array();
for ($index = 10; $index >=0; $index--) {
    array_push($numbers, $index);
}
echo "Numbers array manually created in reverse";
echo "<br/>";
foreach ($numbers as $current){
    echo "$current ";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

//creating reversed array using the 3rd range parameter
echo "Numbers array using stepped range<br>";
$nums=  range(30, 0, -1);
foreach ($nums as $val) {
    echo "$val ";
}


?>

