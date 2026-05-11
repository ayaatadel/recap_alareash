<?php
include_once "navbar.php";

// $track = "software fundamentals";
// $branch = "Alarish";
// $quarter = 3;
// echo "<br> <br> welcome to $track in $branch branch in quarter $quarter <br>";


// // echo   (struct) ====>   string or number or variable or expression  , muliple parameters  , not return
// // var_dump  ====>  array or object or variable or expression  ,muliple parameters  , return void , all information 
// // print     ===>  single parameter   , return 1
// // print_r    ===>  array or object or variable or expression  , 2 rguments at most , return void


// // echo $track , $branch , "<br>";
// // print ($track . "<br>");   // concatenation operator
// // // print ($track , "<br>");   // error 
// // // print_r ($track ,$branch ,"<br>");   //   2 rguments at most
// // var_dump($track ,$branch, "<br>");   // 


// //   single line comment
// #   single line comment
// /*
//     1- echo
//     2- print
//     3- print_r
//     4- var_dump

// */  

// //  Data types in php 
// // string , integer , float , resource , boolean , null , array , object   (class instance)
// // $price =10.5;
// // $students=["mahmoud", "hossam ","leena"];
// // $students=array("mahmoud", "hossam ","leena");
// // $isAdmin=true;
// // $acceepted=null;  // not value
// // $acceepted=""; // value empty string
 
// // =============== Reasource ====> file , database connection , stream  
// // php ===> loosely typed language 

// // data type ===> gettype(), var_dump()
// /**
//  * is_string() , is_int() , is_float() , is_bool() , is_array() , is_object() , is_resource() , is_null()
//  */


// // echo gettype($price) , "<br>";

// // echo  is_float($track) , "<br>";
// // var_dump( is_float($track) , "<br>");

// // $test="";  // false
// // $test="0";  // false

// // • truthy values: 1," ", true, any number except 0 ,undefined, any string except "0", any array except []
// // • falthy values: 0, "", null, false, []




// // ======================== operatorts in php 
// // 1- arithmetic operators  + - * / % **
// // 2- comparison operators  == === != !== > < >= <=
// // 3- logical operators  && || !
// // 4- assignment operators  = += -= *= /= %= **=
// // 5- string operators  . .=


// // $x=10;
// // $y=3;

// // echo $x + $y , "<br>";  //  13
// // echo $x - $y , "<br>";  //  7
// // echo $x * $y , "<br>";  //  30
// // echo $x / $y , "<br>";  // 3.3
// // echo $x % $y , "<br>";  // 1
// // echo $x ** $y , "<br>";  // 1000  ^

// // 10/(3=3) ===> 3*3=9 ====> 10-9=1
// // 15% 4 ===> 3 ===> 3*4=12 ==> 15-12=3


// // logical operators 

// // &&    ===> false if there is any false  (true ==> all true)
// // ||   ==> true if there is any true   (false ==> all false)
// // !   ==> true ==> false  , false ==> true




// // comparison operators
// /***
//  * > <  >=  <=
//  * ==  ===  !=  !==
//  *   ==                    ===   
//  *  value            value & type 
//  *   10=="10"     10==="10"    
//  *    true        false
//  * ==> (10==10)&& (type of 10 == type of "10")  
//  * ==> true && false  ==> false
//  * 
//  * !=     !==
//  * 10!="10"     10!=="10"
//  * !(10==10)         !((10==10)&& (type of 10 == type of "10") ) 
//  * 
//  * !true  ==> false          !(true && false)  ==> !(false)  ==> true
//  */


// // assignment operators


// // pre_inrement
// // post_inrement
// // pre_decrement       
// // post_decrement


// // $x=5;
// // echo $x++ , "<br>";    // 5     ---> 6
// // echo ++$x , "<br>";    //7   ---> 7
// // echo $x-- , "<br>";    //   7   ---> 6
// // echo --$x , "<br>";    //  5---> 5



// // $x=$x+1;   ==> $x+=1;  ==> $x++;
// // $x=$x-1;  ==> $x-=1;  ==> $x--;
// // $x*=5;  ===> $x=$x*5;
// // $x/=5; ===> $x=$x/5;
// // $x%=5;  ==> $x=$x%5;
// // $x**=5;  ==> $x=$x**5;



// // conditioal statements  ==> if  , if else , if elseif else , switch case , ternary operator

// $x = 10;
// // if($x>0){
// //     echo "x is positive";
// // }
// // if($x>0){
// //     echo "x is positive";
// // }else {
// //     echo "x is negative";
// // }
// // if($x>0){
// //     echo "$x is positive";
// // }else if($x<0) {
// //     echo "$x is negative";
// // }else {
// //     echo "$x is zero";
// // }
// // ternary operator ===> if` else in one line
// // (condition)?true: false;

// // ($x>0)?print ("x positive"):print("x negative or zero");
// // echo(($x>0)?"x positive":"x negative or zero");

// // $x=0;
// // // if($x>0){
// // //     echo "$x is positive";
// // // }else if($x<0) {
// // //     echo "$x is negative";
// // // }else {
// // //     echo "$x is zero";
// // // }
// // ($x>0)?print("x positive"):(($x<0)?print ("x negative"):print("x zero"));


// // switch case   ===> equality
// // $day=1;
// // switch ($day)
// // {
// //  case 1 :
// //     echo "saturday .<br>";
// //     break;
// //     case 2 :
// //     echo "sunday .<br>";
// //     break;
// //     case 3 :
// //     echo "monday .<br>";
// //     break;

// //     case 4 :
// //     echo "tuesday .<br>";     
// //     break;
// //     default :
// //     echo "friday .<br>";
// //     break;

// // }



// // loop ==> for  , while , do while , foreach


// // for (initalize; condition , increment/decrement){
// //     // code to be executed
// // }


// // for ($i=1;$i<=5;$i++)
// //     {
// //         echo $i . "<br>";
// //     }

// // while(condition){
// //     // code to be executed
// // }   
// // $i=1;
// // while($i<=5)
// //     {
// //         echo $i . "<br>";
// //         $i++;
// //     }



// // do{
// //     // code to be executed
// // }while(condition);

// //    $i=5;
// // do{
// //     echo $i . "<br>";
// //     $i++;
// // }while($i<=5);


// ///   Functions in php
// // 1- built in functions  (getype  , settype , var_dump  , is_string  , is_int  , is_float  , is_bool  , is_array  , is_object  , is_resource  , is_null   .........)


// // 2- user defined functions

// // function parametarized  ===> has parameters 
// // function not parametarized  ==> has no parameters

// // funtion return value  ===> return statement with value
// // function not return value  ===> return statement without value or no return statement (void)




// // signature of function ===> function name + number of parameters + type of parameters



// // not para , not return
// // function test()    // signature
// // {   
// //     echo "hello";   // body of function
// // }


// // test(); // call or invoke or execute function
// /**
//  * Block scope   , local scope
//  * global scope
//  */



// // $track = "software fundamentals";  // global variable
// // function sayHello($track)    // signature
// // {   
// //     $track ="php"; // local variable
// //     global $track;  // track = software fundamentals

// //     // $track = "python";
// //          // reasign value of variable =track =>  python
// //     echo $track;   // body of function
// // }


// // sayHello("open source"); // call or invoke or execute function 


// // $x=5;
// // $y=4;
// // function sum ($x , $y)
// // {
// //     global $x , $y;   // 9
// //     $x=7;   // 7+4=11
// //     return $x+$y;// 5

// // }


// // echo sum(2,3);


// // data type parameters || data type of return

// // params      // return
// // function sum (int $x , int $y) : int {
// //     return $x+$y;
// // }


// // echo sum(2,3);

// // default value of parameter

// // function data ( string $name,string $email , string $phone="studentPhone") : void {
// function sum(int $y = 4, int $x = 6): int
// {
//     return $x + $y;
// }
// // function sum ( int $y=4,int $x=6) : int {
// //     return $x+$y;
// // }
// //     echo $name." :  ".$email."  :".$phone;
// // }

// //  data($name="mahmoud",$email="mahmoud@example.com");


// // expression function

// // $sum=function (int $x ,int $y){
// //     return $x+$y;
// // };


// // echo $sum(3,50);



// // $test=function (string $name)
// // {
// //     echo "hello . $name <br>";
// // };

// // $test("hossam");


// // Arrow function  , clusure function  , lambda function  , anonymous function  , expression function
// // function (parameters) : return type  => expression
// // $sayHello = fn($name, $age) => "hello . $name :  $age years old <br>";
// // // function (parameters) : return type  => expression
// // echo $sayHello("leena", 25);
// // $sayHello = fn($name) => "hello . $name :  <br>";
// // echo $sayHello("leena");
// // $sayHello = fn() => "hello :  <br>";



// // echo $sayHello();


// // self invoked function ==> IIFE (immediately invoked function expression)

// // (
// // function ()
// // {
// //      echo "hello <br>";
// // }
// //     )();
// // (
// // function ($name , $intake)
// // {
// //      echo "hello . $name :  $intake";
// // }
// //     )("iti",46);



// // call byvalue , call by reference
// // copy value of variable to parameter  ===> call by value
// // copy address of variable to parameter  ===> call by reference



// // $name="mahmoud";
// // $test ="test";
// // function data (&$name)
// // {
// //     $name="iti";
// //     echo "hello . $name <br>";
// //     }
// //     $test="reham";
// //     echo $name . "<br>";  
// // echo $test . "<br>";  
// // data($test);  // call
// // echo $test . "<br>"; 


// // $name="mahmoud";
// // $test ="test";
// // function data ($name)
// // {
// //     $name="iti";
// //     echo "hello . $name <br>";
// //     }
// //     $test="reham";
// //     echo $name . "<br>";  
// // echo $test . "<br>";  
// // data($test);  // call
// // echo $test . "<br>"; 


// // $n=1;
// // function add (&$n)
// // {
// //     $n++;
// //     echo "inner function: " . $n . "<br>";
// // }
// // add($n);  //
// // echo "outer function: " . $n . "<br>"; // 



// //===== Variable of variable
// //  x y =10 
// //  x = 5 
// //  5 y =10

// // // $x = track ===> $ $x = "sw" ===> $track = sw
// // $x="track";
// // $$x="software fundamentals";  // $track="software fundamentals";
// // echo $x . "<br>";    // track
// // echo $$x . "<br>";   // software fundamentals
// // echo $track . "<br>";   // software fundamentals

// // casting ===> change data type of variable to another data type  ---> settype
// // string ---> integer 

// // $x=5;
// // echo gettype($x)."<br>";  // int
// // // settype($x,"string");
// // // echo gettype($x)."<br>"; //  string


// // $x=(string)($x);
// // echo gettype($x)."<br>"; // string

// //************************************* */

// /// call page in another page  ===> 
// // include , require , include_once , require_once
// // include => multiple times  , if file not found continue execution  (warning)
// // require => multiple times  , if file not found stop execution  (error)
// // include_once => single time , if file not found continue execution  (warning)
// // require_once => single time , if file not found stop execution  (error)



// // header , navbar ,  footer   (include or require)
// //  connection to database (require_once) 



// // require_once "footer.php";

// //Array     ==> more than data type
// // indexed array ,asscociative array , multidimensional array

// $names = ["mahmoud", "hossam ","leena"];   // index=0  || length ==> count($arr_name)
// $names=array("mahmoud", "hossam ","leena");
// $data = ["mahmoud", ["php", "mysql"], 25,true , null];

// // indexed array ===> index , value

// echo $names[0];
// $names[1]="fahd";
// echo $names[1],"<br>";

// print_r($names);
// echo "<br>";
// var_dump($names);
// echo "<br>";


// for($i=0;$i<count($names);$i++)
//     {
//         echo "<h1  style='color:blue;text-align:center'> $names[$i] </h1> ";
//     }


//     foreach($names as $name)
//     {
//         echo "<h1  style='color:blue;text-align:center'> $name </h1> ";
//     }

// array_push($names,"nada","mohamed");  // add element at the end of array
// array_unshift($names,"reham","eyad"); // add element at the beginning of array
//  foreach($names as $name)
//     {
//         echo "<h1  style='color:blue;text-align:center'> $name </h1> ";
//     }
//     echo "<h1  style='color:red;text-align:center'> ********************** </h1> "; ;
// array_pop($names); // remove element from the end of array
// array_shift($names); // remove element from the beginning of array
// array_shift($names);

//   foreach($names as $name)
//     {
//         echo "<h1  style='color:blue;text-align:center'> $name </h1> ";
//     }

//***************** concatenation */
// spread operaor
// $arr1=[1,2,3,12];
// $arr2=[4,5,6,7,9];

// $arr3=$arr1+$arr2;
// // $arr3=[...$arr1,...$arr2];
// print_r ($arr3);




$arr1=[1,2,3,12];
// $arr2=$arr1; // value
// $arr2[0]=100;
// print_r ($arr1);
// print_r($arr2);

// $arr2=&$arr1;  // reference of arr1
// $arr2[0]=100;       
// print_r ($arr1);
// print_r($arr2);

// implode  ===> array to string  ==> copy from array to string 
// explode ==> string to array

// $arr1=[1,2,3,12];
// implode(" , ", $arr1);
// echo "<br>";
// $array = ['lastname', 'email', 'phone'];
// // var_dump(implode(",", $array));
// $names=implode(",", $array);
// echo $names;
// echo "<br>";
// var_dump($array);




// impolde ---> array to string  ===> copy to string
// main array ===> array 

// Associative array  ===> key , value
// $ass_array=[
//     "name"=>"reham",
//     "age"=>24
// ];


// $data=[
//     [
//         "name"=>"reham",
//         "age"=>24
//     ],
//     [
//         "name"=>"hossam",
//     "age"=>25
// ]
// ];


// // var_dump($data);

// foreach($data as $item)
// {
//     // var_dump($item);
//     foreach($item as $key=>$value)
//     {
//        echo $key , "<br>";

//          echo $value , "<br>";
//     }
   
// };


// $data=[
//     [
//         "name"=>"reham",
//         "age"=>24
//     ],
//     [
//         "name"=>"leena",
//         "age"=>23
//     ],
//     [
//         "name"=>"hossam",
//     "age"=>25
// ]
// ];

//   echo "<table style='width:50%;margin:auto;text-align:center' class='table table-striped table-hover'>";
//     echo "<thead>";
//       echo "<tr>";
//         echo "<th>Name</th>";
//         echo "<th>Age</th>";
//      echo "</tr>";
//     echo "</thead>";
//     echo "<tbody>";

//     foreach($data as $item)
//         {
//             // item --> associative array  ==> key , value
//             echo "<tr>";
//             foreach($item as $key=>$value)
//              {
//                 echo "<td>" . $value . "</td>";
              
//              }
//              echo "</tr>";
//         }
   
      
//     echo "</tr>";
//     echo "</tbody>";
//   echo "</table>";



  // array_keys  ===> get keys of array  ===> array
    // array_values  ===> get values of array  // array


    // var_dump(array_keys($data));
    // var_dump(array_values($data));


    
// $data=[
//     [
//         "name"=>"reham",
//         "age"=>24
//     ],
//     [
//         "name"=>"leena",
//         "age"=>23
//     ],
//     [
//         "name"=>"hossam",
//     "age"=>25
// ]
// ];

// foreach($data as $item)
// {
// //    var_dump($item);
// var_dump(array_keys($item)); // name , age
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump(array_values($item));  // reham , 24  || leena , 23 || hossam , 25
// echo "<br>";
// echo "<br>";
// echo "<br>";
// }


//   indexed array  ===> key index  , value
//   0         1
// $arr=["iti","php"]; // indexed array  ---> key index
// echo "<br>*************** keys indexed ************<br>";

// var_dump(array_keys($arr));
// echo "<br>************ values indexed***************<br>";

// var_dump(array_values($arr));
// echo "<br>**************   *************<br>";
//         //  key -> value
// $arr2=["name"=>"iti","course"=>"php"]; // associative array
// echo "<br>***************keys  associative array ************<br>";

// var_dump(array_keys($arr2));
// echo "<br>************ values associative***************<br>";

// // var_dump(array_values($arr2));
// $arr4=[[1,12],[2,3]]; // multidimensional array (indexed array inside indexed array)
// $arr3=[
//     ["name"=>"reham","age"=>24],  // index 0 ==> value []
//     ["name"=>"leena","age"=>23],// index 1 ==> value []
//     ["name"=>"hossam","age"=>25] // index 2 ==> value []
// ]; // multidimensional array (associative array inside indexed array)


// echo "<br>***************************<br>";

// echo "<br>***************  keys multidimensional array ************<br>";
// var_dump(array_keys($arr3));
// echo "<br>************ values multidimensional array***************<br>";

// var_dump(array_values($arr3));



// foreach (array_values($arr3) as $item)
//     {
//         // var_dump($item); // name , age
//         foreach (array_values($item) as $value)
//         {
//             echo $value . "<br>";
//         }
//     }




// string functions  ===> strlen  , str_word_count  , strrev  , strpos  , str_replace  , substr  , strtolower  , strtoupper

$str="ITI php course";
$text="welcome to php course in iti";
echo strlen($str) , "<br>";  // length of string

echo str_word_count($str) , "<br>";  // number of words in string
echo strrev($str) , "<br>";  // reverse string
echo strtolower($str) , "<br>";  // convert string to lowercase
echo strtoupper($str) , "<br>";  // convert string to uppercase
echo strpos($str,"php") , "<br>";
echo str_replace("php","mysql",$str) , "<br>";  // replace word in string


print_r (explode (" ",$str));
echo "<br>";
echo substr($str,-3,2) , "<br>";  // start from index -3 and get 2 characters


echo $str . " " . $text . "<br>";  // concatenation operator

var_dump(str_starts_with($str, "ITI"));  // concatenation operator
var_dump(str_ends_with($str, "ITI"));  // concatenation operator