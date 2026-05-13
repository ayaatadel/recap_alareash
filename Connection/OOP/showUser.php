<?php

require_once './index.php';
// var_dump($db);



$userId=$_GET['id'];
if(isset($userId))
    {
$student=$db->show("students",$userId);
var_dump($student);
    }
    else{
        header("location=AllUsers.php?message=Error");
        exit;
    }
// var_dump($allStudentsData);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>

<table>
    <thead>
      <th>UserName</th>
      <th>UserEmail</th>
      <th>Actions</th>
    </thead>
       <tbody>
        <tr>
           <?php 
           
           echo "<td>".$student['name']. "</td>";
           echo "<td>".$student['email'] ."</td>";
          echo "<td> <a href='AllUsers.php'><button class='btn btn-info'>Back
                  </button></a> </td>"

        
           
           ?>
        </tr>
            
        </tbody>
</table>
</body>
</html>