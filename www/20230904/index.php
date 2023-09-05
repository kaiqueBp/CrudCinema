<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION["name"])) {
    ?>
        <h1><?= $_SESSION["name"] ?></h1>
        <form action="logout.php" method="POST">
            <input type="submit" value="Logout">
        </form>
    <?php
    } else {
    ?>
        <form action="form.php" method="POST">
            <input type="text" name="name">
            <input type="submit">
        </form>
    <?php
    }
    ?>
</body>

</html>