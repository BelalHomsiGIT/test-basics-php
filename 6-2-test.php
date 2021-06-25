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
    $str_v='test';
    $is_str= is_string($str_v);
    echo $is_str . "<br>"; // 1
    echo is_numeric($str_v) . "<br>"; // nothing
    echo var_dump(is_string($str_v)) . "<br>"; // true
    echo var_dump(is_numeric($str_v)) . "<br>"; //false
    $xnull = null;
    echo var_dump($xnull);
    //Integer,Numbers
    $x5 = 5985;
    var_dump($x5); //int(5985)
    echo "<br>";
    echo "Max INT: " . PHP_INT_MAX . "   , Min INT: " .
     PHP_INT_MIN . "   , Int Size: " . PHP_INT_SIZE;
    echo "<br>";
    //Casting
    //Cast float to int 
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;    
    echo "<br>";
    //Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    //
    $x = "hello";
    $int_cast = (int)$x;
    echo $int_cast . "<br>";
    //
    echo(min(0, 150, 30, 20, -8, -200)) . "<br>";  // returns -200
    echo(max(0, 150, 30, 20, -8, -200)) . "<br>";  // returns 150
    echo (max('bell','ahmad','joe')) . "<br>";  // returns joe
    echo (min('bell','ahmad','joe')) . "<br>";  // returns ahmad
    echo (max('bell',25,'joe')) . "<br>";  // returns 25
    echo (min('bell',25,'joe')) . "<br>";  // returns belal
    echo(rand()) . "<br>";
    echo(-rand()) . "<br>";
    echo(rand(-20,20)) . "<br>";
?>
</body>
</html>