<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1 style="color: blue; text-align: center;">Profile</h1>

</body>

</html><?php

        // require_once("navbar.php");
        require_once("index.php");

        if (!isset($_SESSION['login_id'])) {
            header("location:login.php?message=you must login firsy");
            exit;
        } else {
            $userId = $_SESSION['login_id'];
            $selectid = "select * from students where id=:id";
            $sqlSelectid = $connection->prepare($selectid); // sql
            $sqlSelectid->execute(
                [':id' => $userId]
            );
            $user = $sqlSelectid->fetch(PDO::FETCH_ASSOC);
        }


        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    //


    <h1 style="color: blue; text-align: center;">Profile</h1>
</body>

</html>