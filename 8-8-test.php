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
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['submit1'])){
            echo $_REQUEST['uname'] . "<br>";
            echo $_REQUEST['pwd'] . "<br>";
            echo "SUBMIT 1";
        }elseif(isset($_POST['submit2'])){
            echo $_REQUEST['uname'] . "<br>";
            echo $_REQUEST['pwd'] . "<br>";
            echo "SUBMIT 2";
        }
    }        
?>
</body>
</html>