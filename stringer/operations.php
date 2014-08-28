<link rel="stylesheet" href="../css/styler.css" type="text/css"/>
<?php

//split an email into username and domain name using the explode function
$email="wazza.inc@gmail.com";

$array=  explode("@", $email);
print($array[0]."<br/>");
print($array[1]);

//join email parts using implode function
$new_email=  implode("@", $array);
echo "<br/>$new_email<br/>";

//break up a string into tokens 
$my_string="This is an example of how to break a string into many parts";
$token1= strtok ($my_string, " ");
echo "$token1";

//$token2=strtok($my_string, " ");
//while($token2!=" "){
//    $token2=  strtok(" ");
//    echo "$current_token<br/>";
//}

echo "<br/><br/>";
echo "<br/>===============Strong Comparing============</br>";

//string comparisons
$my_string1="bags";
$my_string2="bag";
$my_string3="cats";
$my_string4="CATS";
$my_string5="cot";
$my_string6="dot";

echo strcmp($my_string1, $my_string2);//string 1 is grater than string 2 in lexographic order.
echo "<br/>";
echo strcasecmp($my_string3, $my_string4);//string 3 (comes after) is greater than string 2 in lexographic order.
echo "<br/>";
echo strnatcmp($my_string5, $my_string6);//string 5 is lesser than string 6 in natural order.

//using strlen to validate an email
//shortest possible email address = 6 characters (a@a.tx)
echo "<br/>";
$email_addr="rex@jk.sf.ke";
if(strlen($email_addr)<6){
    echo "Enter a valid email address";
}else{
    echo "The email address is OK";
}

//check for a substring within a string

echo "<br/>";
$content="This is to request that the order I placed last week be delivered on time";
//the function will find the word and return all text in the string from the first appearance of the string.
echo strstr($content,"order");


//finding a string within a string...
$stringer="This is the police. We suggest you surrender and come with us. Its the military poli ce";
$target="police";
$result=  strstr($target, $stringer);

