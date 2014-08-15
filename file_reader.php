<link rel="stylesheet" href="css/styler.css" type="text/css"/>

<?php

$file_pointer=  fopen("/var/www/uk_data/myfile.txt", 'rb');

if(!$file_pointer){
    echo "The File could not be located";
    exit();
}

//read the file
//the feof function returns false when the file pointer is at the 
//end of the file.
while(!feof($file_pointer)){
    
    //fgets reads a line at a time from the file or uintil it encounters a EOF or 
    //reaches 998 bytes.
    //=====Alternative functions=======
    //fgetss() strips html and php tags from the file input
    //fgetcsv breaks up lines based on  adelimitting character e.g. comma or tab
    $text=  fgets($file_pointer);
        echo "$text"   ;
    
    }
    //read another file using csv; returns the contents in an array
//    $handle=fopen("/var/www/uk_data/file2.txt", 'rb');
//    $text_csv=fgetcsv($handle,100, "\t");
//    if(is_array($text_csv)){
//        echo "<br>An array was returned withe the CSV values<br/>"   ;
//        for ($i;$i< 100;$i++){
//            echo "$text_csv[$i]\t\t";
//        }
//}

//reading an entire file at once 
//the readfile function will open the file,echo the content to the standard output
//then close the file.
//the include_path parameter in php.ini can be used to specify location of the file

$file_name='file3';
$test_handle=  fopen($file_name, 'rb', 1);
//$contents = readfile($file_name,1);
while(!feof($test_handle)){
    $current=fgets($test_handle,999);
echo "$current<br>";
}

//using the readfile function
echo "<br>";
echo "<br>";
echo "<br>";
echo "$content";


//reading a character at a time 
//takes a file pointer and returns the next character in  the file

$handler2=readfile("jumper",1);
$content2=  fgets($handler2);

while(!feof($handler2)){
    $char=  fgetc($handler2);
    //side effect of thios function is returnning the EOF character and hence
    //one has to test for it.
    //also checks for "\n" and replace with a <br> for HTML output
    if(!feof($handler2)){
        echo ($char=="\n"? "<br/>":$char);
    }
}

///checking if the file exists
if(file_exists($file_name)){
    echo "The File exists";
}
 else {
    echo "No such File";
    
}



