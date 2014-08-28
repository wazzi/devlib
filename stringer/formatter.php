<link rel="stylesheet" href="../css/styler.css" type="text/css"/>
<?php
//formatting a string for html output
//nl2br() takes a string and replaces all newline characters with a br. usefull for echoing long strings to the browser.

$content = "this is the trouble with a\n the Kiss dramatic TV\n this is the best\n";
$output = nl2br($content);
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

$amount = 93;
//represent as float value with 2 decimal places
printf("<br>The total amount due is KES %.2f", $amount);
print_r("<br/>");

//NB: If there are n conversion specifications, there will be n parameters.
$number = 25;
printf("<br>The number %s in octal is %o", $number, $number);
printf("<br>The number %s as a 2 point float is %f", $number, $number);
printf("<br>The number %s in hexadecimal is %X", $number, $number);
printf("<br>The number %s in binary  is %b", $number, $number);

/* * conversion specification format 
 * % ['padding_character] [-] [width] [.presicion] type
 */

//padding can be used on the specification by using a ' before the %
// the - symbol cann be used to left justify data in the field.
//the width specifier can be used to specify the space (room) to leave for the variable substituted here
$counter = 8;
//        create padding of 4 characteres represented using a #, any value of counter with less than 4 digits will be printed 
//with preceeding 3 # symbols
printf("<br/>Number of processes: %'#4s", $counter);

$counter = 4243;
printf("<br/>Number of processes: %'#4s", $counter);
print("<br/>");
//changing the case of a string
//strtoupper()-> turns string to upper case 
print("<br/>==================<br/>Changing string case<br>==================<br/>");
$mystring = "Website Feedback Content";
$mystring2 = "KEEPING UP WITH TECHNOLOGY";
$mystring3 = "allex the chap";
$mystring4 = "stanbic bank announces merger";

print(strtoupper($mystring)."<br/>");
print(strtolower($mystring2)."<br/>");
print(ucfirst($mystring3)."<br/>");//upper case the first letter
print(ucwords($mystring4)."<br/>");//upper case all first letters of the alphabetic words


//replacing characters from a  string i.e characters that may be considered as control character in mySQL e.g NULL, ', and "
//usefull before storing data into a database.
$user_input="<br/>\"The Arduino board brings new possibilities\"<br>";

//strip the quotes from the string
$stripped=  addslashes($user_input);
print ("User input: $user_input");
print ("After using addslashes(): $stripped");



print("<br/>");
//joining and splitting strings
//using explode()-> splits a string based on a separator valu and return an array of the string components

$user_comments="This website should be able to search for keywords in a string and report the number of occurences "
        . "of a target wotd of phase";
$words=  explode(' ', $user_comments);
$counter=0;
foreach ($words as $value) {
    echo "$value"." , ";
    if($value=='of'){
        $counter++;
    }
}
echo "<br/>The number of items in the array is ". count($words);
echo ("<br/>The word \'of\' appears $counter times");
