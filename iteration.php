<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php
$counter = 120;
while ($counter > 0) {
    echo "$counter, ";
    $counter--;
}

print("<br>");
print("<br>");
print("<br>");
//using the for statement to create table
echo "<table>";
//create rows
for ($count = 0; $count <= 10; $count++) {
    echo "<tr >";
    
    //create columns
    for ($num = 0; $num <= 10; $num++) {
        echo "<td>$count</td>";
    }
    echo "</tr>";
}
echo "</table>";


//using do..while

$totals=0;
do{
    echo "$totals";
    $totals+=100;
}
    while ($totals<=7);
    
    
    //alternative syntax for all PHP statements
    //replace the opening brace with a : and the closing 
    //brace with a endif, endswitch, endfor, endwhile, endforeach
    
    if($_POST['user']==NULL):
    echo "<br>No such Thing...";
        endif;
        
        //same as:
    if($_POST['user']==NULL){
    echo "<br>No such Thing...";
    }   
    