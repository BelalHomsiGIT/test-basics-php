<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <input type="text" name='fname'>
        <input type="submit">
    </form>
    <?php
        echo $_POST['fname'];
    ?>
    <!--Note: information is unvisible in the URL -->
    <!--Note: error message appear: -->
    <!-- Notice: Undefined index: fname in D:\xampp\htdocs\mytests\tests\8-3-post.php on line 15 -->
</body>
</html>