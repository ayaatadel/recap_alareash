<?php 
require_once("navbar.php");
Class DB{
protected $dbName;
 protected $dbType;
 protected $dbHost; // ===========> default = 3306 || (localhost:3307)
 protected $userName;
 protected $password;

protected $connection;

 function __construct($dbName,$dbType,$dbHost,$userName,$password)
 {
   $this->dbName=$dbName;
   $this->dbType=$dbType;
   $this->dbHost=$dbHost;
   $this->userName=$userName;
   $this->password=$password;
$this->connection = new PDO(
    "$dbType:host=$dbHost;dbname=$dbName",
    $userName,
    $password
); }

/**
 * CRUDS 
 * CREAT
 * Read
 * Update
 * Delete
 */


function select($table)
{


    $querySelect = "select * from $table";
            $sqlSelect= $this->connection->prepare($querySelect); // sql
            $sqlSelect->execute();
            $allData = $sqlSelect->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($allData);
            return $allData;
            

}


function show($table,$id)
{

    $selectid = "select * from $table where id=:id";
            $sqlSelectid = $this->connection->prepare($selectid); // sql
            $sqlSelectid->execute(
                [':id' => $id]
            );

            $userData=$sqlSelectid->fetch(PDO::FETCH_ASSOC);
            return $userData;

}

function delete($id, $table)
{

    $selectid = "delete from $table where id=:id";
            $sqlSelectid = $this->connection->prepare($selectid); // sql
            $sqlSelectid->execute(
                [':id' => $id]
            );

           
            return true;

}



}


$db=new DB("iti_alareash_recap","mysql","localhost","root","");
// var_dump($db);

?>