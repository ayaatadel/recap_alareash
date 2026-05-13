<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
  <h1> form login</h1>
  <?php 
  if(isset($_GET["message"]))
    {
      echo "<h3 style='color:green'>" .$_GET["message"] ."</h3>";
    }
  
  ?>
    <form action="server.php" method="post">
        <input type="email" name="email" placeholder="enter email">
        <input type="password" name="password" placeholder="enter password">
        <input type="submit" name="btn-login" value="login">

</body>
</html>