<?php

/**
 * Process form fields by writting to a flat file
 */


/**
 * Steps to writting to a file
 * 1. open the file, if non existent; create it
 * 2. write data to the file
 * 3. Close the file
 * 
 * Options when opening a file
 * (a) For reading, writing or both
 * (b) Overwriting existing content or appending at the end
 * (c) Specifying if content is binary or text if system differentiates.
 */

//$DOC_ROOT=$_SERVER['DOCUMENT_ROOT'];
//the file is placed outside the web root for security
//its not accessible to the web
//modes available for the files
    //r: reading from start
    //r+,open for reading and writting begin from start
    // w, write, from beggining, exists? delete existing contents, create it if not.
    // w+,read and write, start of file, exists? delete existing contents, create it if not.
    // x, write, begin at start, exists? dont open, returns false and PHP warning
    // x+, read and write begin at start, exists? dont open, returns false and PHP warning
    // a, write, append at end of existing content, no exists? create.
    // a+,read and write(append) no exists? create.
    // b binary, use in conjunction with other modes if system diffrentiates (Windows) recommended for portability
    // t text, option only for win.
$fp=  fopen("/var/www/uk_data/myfile.txt", 'ab');

if($fp){
//    write to the file using fputs
//    can also use fwite 
    echo 'writting to the file...';
    //lock the file for writting
    flock($fp,LOCK_EX);
    
    //the method below can be used for writting and does not require fopen or fclose
    //file_put_contents($filename, $fp);
    
    
    fputs($fp,"This is a test string");
    flock($fp,LOCK_UN);
    if(fclose($fp)){
        echo 'File closed';
    }
    
}
else{
    echo 'could not open file';
}