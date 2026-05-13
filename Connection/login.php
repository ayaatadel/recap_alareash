<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
 
  <?php 
  require_once "navbar.php";
  if(isset($_GET["message"]))
    {
      echo "<h3 style='color:green'>" .$_GET["message"] ."</h3>";
    }
  
  ?>
   <h1> form login</h1>
    <form action="server.php" method="post">
        <input type="email" name="email" placeholder="enter email">
        <input type="password" name="password" placeholder="enter password">
        <input type="submit" name="btn-login" value="login">

</body>
</html>