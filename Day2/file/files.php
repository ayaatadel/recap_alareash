<?php 
// store data ===> read ,write , delete ,update 
// path of file   ===> open file ===> read file  ===> write file  ===> close file

// __FILE__  ===> return path of file 
// basename(__FILE__)  ===> return name of file
// pathinfo(__FILE__)  ===> return array of file info



echo __FILE__ . "<br>";
// D:\2025-2026\php\Sw_Fundamentals\Day2\files.php

// file name 
echo basename(__FILE__)."<br>"; // fileName + extension  // files.php

// file info
print_r(pathinfo(__FILE__));
echo "<br>";
// Array ( [dirname] => D:\2025-2026\php\Sw_Fundamentals\Day2 
// [basename] => files.php
//  [extension] => php 
//  [filename] => files 

// echo pathinfo(__FILE__)["extension"]."<br>"; // php
// echo pathinfo(__FILE__)["filename"]."<br>"; // php
// echo pathinfo(__FILE__)["basename"]."<br>"; // php

echo pathinfo(__FILE__,PATHINFO_EXTENSION)."<br>"; // php
echo pathinfo(__FILE__,PATHINFO_FILENAME)."<br>"; // php
echo pathinfo(__FILE__,PATHINFO_BASENAME)."<br>"; // php

// create
// touch 
// touch("test.txt");// create file in the same path of current file

// delete file
       // path of file 
// unlink("./lab/test.txt");
// unlink("test.txt");


// directory ==> folder
// create directory
// mkdir("demo");
// rmdir("demo"); // delete directory

// if(is_dir("demo"))
//     {
//         echo " file exist";
//     }else{
//         mkdir("demo");
//     }

// handel errors 
// @mkdir("demo") or die("Error in creating directory");

// is_file("test.txt") ? print ("file exist") : touch("test.txt") or die("Error in creating file");

// read data , store data from file

// file_put_content  // write data in file 
// file_get_content // read data from file


// file_put_contents("test.txt","\n nada\n",FILE_APPEND|LOCK_EX); // write data in file  // if file not exist ==> create file and write data in it
// /**
//  * file not exist ==> create file and write data in it
//  */

// echo file_get_contents("test.txt")."<br>";


/**  MODE of file_put_contents
 * read : read data from file
 * write : write data in file (if file has data remove it)
 * append : write data in file (file has data keep data and add new data)
 * 
 * 
 * 
 * ==============
 * r  : read only if file not exist return false
 * w : write only (if file has data remove it) if file not exist create file
 * a : append only file has data keep data and add new data if file not exist create file
 * a+ : read and append only file has data keep data and add new data if file not exist create file
 * w+ : read and write (if file has data remove it) if file not exist create file
 * r+ : read and write only if file not exist return false
 */


// file_put_contents("test.txt","\n ITI\n",FILE_APPEND|LOCK_EX);

// ||

if(file_exists("test.txt"))
{
    // echo file_get_contents("test.txt")."<br>";
    // check file has dat 
    /**
     * open file 
     * read data from file
     * close file
     */

    // echo fopen("test.txt","a") ;
     // resource 
     $myfile=fopen("test.txt","a+") ;
     $myfileSize=filesize("test.txt");
     if($myfileSize > 0)
     {
        fwrite($myfile,"\n SW");
        $myfileSize=filesize("test.txt");
        // fclose($myfile);
        rewind($myfile); // move pointer to start of file
        echo fread($myfile,$myfileSize)."<br>";
//  fclose($myfile);
}

else{
    echo "file not exist";
}
}
?>