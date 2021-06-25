<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Intro to POST & Get & action</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        Enter Name<input type="text" name="uname">
        <input type="submit" value="send">
    </form>
    <?php
        echo "Hello " . $_POST["uname"];
    ?>
    
</body>
</html>
