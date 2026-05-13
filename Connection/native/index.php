<?php
// connection with database
require_once "navbar.php";
/**
 * dbname
 * dbtype
 * dbhost
 * username
 * password
 */

/**
 * PDO || MYSQLI  
 * PDO: PHP Data Object   (different databases (mysql, postgresql)) , all version support  ===============> deal
 * MYSQLI: MySQL Improved   (mysql only )  , only support mysql 5.0.7 and above
 */



$dbName="iti_alareash_recap";
$dbType="mysql";
$dbHost="localhost"; // ===========> default = 3306 || (localhost:3307)
$userName="root";
$password="";

$connection= new PDO("$dbType:host=$dbHost;dbname=$dbName",$userName,$password);
session_start();
// // var_dump($connection);
// // srlect data
// $QuerySelect="select * from students";  // string
// var_dump($QuerySelect);
// echo "<br>";
// // string => query

// $sqlSelect=$connection->prepare($QuerySelect);
// $sqlSelect->execute();
// // var_dump($sqlSelect->execute());  // select data (out put => data)
// $result=$sqlSelect->fetchAll(PDO::FETCH_ASSOC);  // data =>associative array
// // $result=$sqlSelect->fetch(PDO::FETCH_ASSOC);  // single row

// echo "<br>";
// var_dump($result);


// insert data
// $queryInsert="insert into students(name,email,password)values('mahmoud'
// ,'m@gmail.com','1234')";
// $sqlSelect=$connection->query($queryInsert); // prepare + execute
?>