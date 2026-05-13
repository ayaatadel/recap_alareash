<?php

require_once './index.php';
// var_dump($db);

$allStudentsData=$db->select("students");


// var_dump($allStudentsData);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
   
<table>
    <thead>
      <th>UserName</th>
      <th>UserEmail</th>
      <th>Actions</th>
    </thead>
    <tbody>
<?php 


foreach ($allStudentsData as  $student) {
    # code...
    echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['email'] . "</td>";
        echo "<td class='d-flex justify-content-around'>
        <a href='showUser.php?id=" . $student['id'] . "'><button class='btn btn-warning'>Show</button></a>
        <button class='btn btn-success'>Edit</button>
        <button class='btn btn-danger'>Delete</button>
        </td>";

    echo "</tr>";
}
?>           
        </tbody>
</table>
</body>
</html>