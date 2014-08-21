<link rel="stylesheet" href="../css/styler.css" type="text/css"/>
<?php

//formatting a string for html output
//nl2br() takes a string and replaces all newline characters with a br. usefull for echoing long strings to the browser.

$content="this is the trouble with a\n the Kiss dramatic TV\n this is the best\n";
    $output=nl2br($content);
        echo $output;
        
//formatting the string for printing using printf() and sprintf()
        
        print("<p>this shows the use of the print function. It works the same as the echo function<br/>");
        
        //both the printf() and sprintf() fnctions use the conversion specification as the first parameter
        //this is represented by a symbol represented by a preceeding % e.g:
        //              s - interpret as string and print as string .
        //              f - interpet as double and print as floating point number
        //              b - interpet as integer and print as binary number
        //              c - interpet as integer and print as character 
        //              d - interpet as double and print as floating point number
        //              o - interpet as integer and print as an octal number
        //              X - interpet as integer and print as hexadecimal number with uppcase letteres for the letters A-E 
        
        $amount=93;
        //represent as float value with 2 decimal places
        printf("<br>The total amount due is KES %.2f",$amount);
        print_r("<br/>");
        
        //NB: If there are n conversion specifications, there will be n parameters.
        $number=25;
        printf("<br>The number %s in octal is %o", $number,$number);
        printf("<br>The number %s as a 2 point float is %f", $number,$number);
        printf("<br>The number %s in hexadecimal is %X", $number,$number);
        printf("<br>The number %s in binary  is %b", $number,$number);
        
        //padding can be used on the specification by using a ' before the %
        // the - symbol cann be used to left justify data in the field.
        //the width specifier can be used to specify the space (room) to leave for the variable substituted here
        