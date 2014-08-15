<html>
    <head><title>File Array Test</title></head>
<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//loading a file from disk into an array
//file() ; reads the entire  file and places  the contents in  an array , each line becomes an element
$test=  file("/home/kelli/testfiles/file4");

//counts the number of elements in the array
$total=  count($test);
echo "Number of elements in array: $total<br/>";
foreach ($test as $value) {
    echo "$value<br/>";
}

//explode an array to put data into a table

//read file content and push into array
?>
<?php
$orders=file("/home/kelli/testfiles/file4");
$number=  count($orders);
if($number==0){
    echo "No Orders records in the file";
}

?>
<!-- create table to hold orders-->
<br/>
<br/>
<br/>
<table border="1">
    <thead></thead>
    <tbody>
        <tr>
            <th>Order Time</th>
            <th>Order Date</th>
            <th>Units</th>
            <th>Title</th>
            <th>Album</th>
            <th>Price</th>
        </tr> 
        <?php
        for($i=0;$i<$number;$i++){
            //split up each line in the orders 
            $current_line=  explode(",", $orders[$i]);
            
            //get the integer in the price column
            echo "<tr><td>$current_line[0]</td>"
                    ."<td>$current_line[1]</td>"
                    . "<td align=\"right\">$current_line[2]</td>"
                    . "<td>$current_line[3]</td>"
                    . "<td>$current_line[4]</td>"
                    . "<td>$current_line[5]</td></tr>";
        }
?>
    </tbody>
</table>
</html>