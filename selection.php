<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php
$var = 0;

//no value submitted
if (is_null($_POST['quantity'])) {
    echo 'No data provided';
}

//check for valid numeric values in submitted data...
elseif (!is_numeric($_POST['quantity'])) {
    echo 'Invalid Quantity';
} else {
    $var = $_POST['quantity'];
    echo "Items purchased: $var";
}

//using the switch statement

$option = $_POST['choice'];
echo "<br>$option<br>";

switch ($option) {
    case "internet":
        echo "You selected $option";
        break;

    case "news":
        echo "You selected $option";
        break;

    case "friend":
        echo "You selected $option";
        break;

    default:
        echo "<br> No idea about this";
}
