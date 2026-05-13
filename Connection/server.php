<?php


/** SQL INjection
 *  user write sql ==> hacking
 * 
 * // pinding params ====> : ?
 * 
 * 
 */
require_once "index.php";

if (isset($_POST['btn-register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    /**
     * encrypted password ==> hash , md5
     */
    // check if email exist                             :email select

    // validation ---> name , password , Event::makeListener();\

    $namePattern = "/^[a-zA-Z]{3,18}$/";
    //  perform regular expression math
    if (!preg_match($namePattern, $username)) {
        header("location:register.php?message=name must be characters");
        exit;
    }

    $passwordPattern = "/^[0-9][6,15]$/";
    if (!preg_match($passwordPattern, $password)) {
        header("location:register.php?message=password must be numbers");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?message=check your email");
        exit;
    }

    $selectEmail = "select * from students where email=:email";
    $sqlSelectEmail = $connection->prepare($selectEmail); // sql
    $sqlSelectEmail->execute(
        [':email' => $email]
    );
    $resultEmail = $sqlSelectEmail->fetch(PDO::FETCH_ASSOC);
    if ($resultEmail) {
        header("location:register.php?message=email already exist");
        exit;
    }

    $queryInsert = "insert into students(name,email,password)values(:name
,:email,:password)";
    $sqlSelect = $connection->prepare($queryInsert);
    $sqlSelect->execute(
        [
            ':name' => $username,
            ':email' => $email,
            ':password' => $encryptedPassword
        ]
    );
    header("location:login.php?message=registered successfully");
    exit;
}
if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 $selectEmail = "select * from students where email=:email";
    $sqlSelectEmail = $connection->prepare($selectEmail); // sql
    $sqlSelectEmail->execute(
        [':email' => $email]
    );
    $user= $sqlSelectEmail->fetch(PDO::FETCH_ASSOC); 

    // var_dump($user);
    // pasword---> encrypt ---> data 
    // true --->  false
    if ($user && password_verify($password,$user['password'])) {
             $_SESSION['login_id']=$user['id'];
         header("location:profile.php?message=login successfully");
    exit;
    }else{
            header("location:login.php?message=check your email or password");
    exit;
    }

}


// store data of user ===> session , cookies