<?php

//create variables 

//the default trim(), strips whitespace from beggining and end of string. by default strips carriage, verticcal and horizontal tabs 
//and newline characters
    $name = trim($_POST['name']);
    
    // passing parameters to trim() for character to remove 
    $email = trim($_POST['email'], "\&\!\(\t\0\n");
    $feedback = $_POST['feedback'];

    //ltrim() and rtrim() can also be used to remove whitespace from the start (left) and end (right) respectively
//note the trim functions only work on the beggining and end of strings.
//set up some static info
$to_address="muhindi09@gmail.com";
$subject="Feedback from Wazza website";
$mailcontent="Customer Name: ".$name."\n".
        "Customer Email ".$email."\n".
        "Comments: ".$feedback."\n";
$additional_headers="From: webserver@wazzi.com\r\n".
        'Reply-To: info@wazza.com';

//send email using email funnction
//the last param can be used for additional headers such as Bcc, Cc From
mail($to_address, $subject, $mailcontent, $additional_headers);

?>
<html>
    <head>
            <link rel="stylesheet" href="../css/styler.css" type="text/css"/>
        <title>Feedback</title></head>
    <body>
        <h1>Feedback Submitted</h1>
        <?php
        echo "$email,";
        ?>
        <p>Thanks for your feedback from. We shall keep in touch.</p>
    </body>
</html>


