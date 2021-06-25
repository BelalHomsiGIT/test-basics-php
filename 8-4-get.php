<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        Name: <input type="text" name='fname'>
        <input type="submit">
    </form>
    <?php
        echo $_GET['fname'];
    ?>
    <!--Note: information is visible in the URL -->
    <!--Note: we show : http://localhost/mytests/tests/8-4-get.php?fname=belal -->
    <!--Note: we can write : fname=sami, after (?) -->
</body>
</html>