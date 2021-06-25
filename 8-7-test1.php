<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?PHP
    echo "<h2 style='text-align:center; color:blue;'>Try enter data in URL with ? and &</h2>";
    if($_SERVER['REQUEST_METHOD']=="GET"){
        echo $_REQUEST['uname'] . "<br>";
        echo $_REQUEST['pwd'];
    }else{
        echo "Access denied!";
    }    
    echo "<h3 style='text-align:center; color:green;'>Try open this file directly:</h3>";
    echo "<h3 style='text-align:center; color:green;'>type: https://localhost/mytests/tests/8-7-test1.php?uname=ali&pwd=123456789</h3>";
?>
</body>
</html>