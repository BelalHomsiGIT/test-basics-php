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
    if ( isset($_POST['fname']) ) {
        if( ! empty($_POST['fname'])){
            echo $_POST['fname'];
        }else{
            echo "Name is not inputed!";
        }
    }
        
?>
    <!--Note: information is unvisible in the URL -->
    <!--Note: error message dosn't appear -->
</body>
</html>