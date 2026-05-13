<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
      <?php 
     require_once "navbar.php";
  if(isset($_GET["message"]))
    {
      echo "<h3 style='color:green' class='alert alert-danger'>" .$_GET["message"] ."</h3>";
    }
  
  ?>
    <h1> form register</h1>
    <form action="server.php" method="post" enctype="multipart/form-data">      
        <input type="text" name="username" placeholder="enter username">
        <input type="password" name="password" placeholder="enter password">
        <input type="email" name="email" placeholder="enter email">
        <!-- <input type="file" name="img" placeholder="enter image"> -->
        <input type="submit" value="register" name="btn-register">
    </form>
</body>
</html>