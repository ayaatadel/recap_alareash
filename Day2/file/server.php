<?php
/***
 *  Super global variables
$_GET	  : data from URL
$_POST	  : data from Form
$_SERVER  : information about server 
$_REQUEST : GET + POST
$_SESSION : store temporary data
$_COOKIE  : store data in browser
$_FILES   : store data about files (show all data about files)
 */

// get   ---> url  , post 
// request (method---> get (get), update , delete , send data (post)) -----> server
//      respone      <-----

// var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_POST);
// var_dump($_GET);

// array(4) { ["username"]=> string(5) "ayaat" ["password"]=> string(5) "ayaat" ["email"]=> string(15) "ayaat@gmail.com" ["btn-register"]=> string(8) "register" }

// $_post=[
//     "username" => "ayaat",
//     "password" => "ayaat",
//     "email" => "ayaat@gmail.com"
// ]


// echo $_POST["username"] ."<br>";
// echo $_POST["email"] ."<br>";
// echo $_POST["password"] ."<br>";


// string ====> [] ==> json

var_dump($_FILES["img"]);
echo "<br>";
echo "<br>";
echo "<br>";
// array(6) { ["name"]=> string(19) "Screenshot (90).png" ["full_path"]=> string(19) "Screenshot (90).png" ["type"]=> string(9) "image/png" ["tmp_name"]=> string(50) "C:\Users\Softlaptop\AppData\Local\Temp\php68CB.tmp" ["error"]=> int(0) ["size"]=> int(522002) }
 



if(isset($_POST["btn-register"]))
    {
        // select data from register
        $username=$_POST["username"] ;
        $password=$_POST["password"] ;
        $email=$_POST["email"] ;
        $image=$_FILES['img'];
        // store (images)

        if(!is_dir("images"))
            {
               mkdir("images");
            }

       // name of image  ==>123.png
           echo  "<br>".$image["name"]."<br>"; 

           // time of upload  ==> 1234567890
              echo  "<br>".time() . "<br>";
        $newImage=time().'.'.pathinfo($image["name"],PATHINFO_EXTENSION);

        // var_dump($newImage);

        // store data in data.json
         // check if file exist or not


         if(!file_exists("data.json"))
            {

           file_put_contents("data.json","[]");

            }else{
                // echo "file exist";
// [
//     "username" => "ayaat",
//     "password" => "ayaat",  
//     "email" => "ayaat@gmail.com"

// ]

// exists data 

//   upload image in folder images
// move_uploaded_file(string $from, string $to)
move_uploaded_file($image["tmp_name"],"images/".$newImage);
$data=file_get_contents("data.json"); // string
// var_dump($data);
// convert string to array
$dataDecoded=json_decode($data  ,true); // true=> associative array
// var_dump($dataDecoded);


            // new data
                $userData=[
                    "username"=>$username,
                    "password"=>$password,
                    "email"=>$email,
                    "image"=>$newImage
                ];


                // add new data 
                // array_push($dataDecoded,$userData);
                $dataDecoded[]=$userData;   // add data in array

                // var_dump($dataDecoded);

                // add all data in file

                //file _put_contents===> file , string


              // array ===> string

                $encodedData=json_encode($dataDecoded); // string
                var_dump($encodedData);
                // file_put_contents("data.json",json_encode($dataDecoded)); // array ===> string
                file_put_contents("data.json",($encodedData)); // array ===> string
             

                // header("location:login.php?message=register success");
                // exit();
                  

                // get file ====> file_get_contents===> string 
                // store  file ====> file_put_contents===> string

            }


    }


    if(isset($_POST["btn-login"])){

      var_dump($_POST);

      $email=$_POST["email"] ;
     $password=$_POST["password"] ;

     // get data from file
     $data=file_get_contents("data.json");
        $dataDecoded=json_decode($data  ,true); // true=> associative array

        // var_dump($dataDecoded);
        foreach($dataDecoded as $user)
            {
                // var_dump($user);
                // echo "<br>";
                // echo "<br>";
                if($user["email"]==$email && $user["password"]==$password)
                    {
                        header("location:profile.php");
                        exit();
                    }
            }
     


    }

?>