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
    // Variables Scope
    $a = 5;
    function myTest1() {
    // using a inside this function will generate an error
    echo "<p>Variable a inside function is: $a</p>";//error
    }
    myTest1();
    echo "<p>Variable a outside function is: $a</p>";// 5
    
    function myTest2() {
        $b = 7; // local scope
        echo "<p>Variable b inside function is: $b</p>";//7
      }
    myTest2();
    // using b outside the function will generate an error
    echo "<p>Variable b outside function is: $b</p>";//error
    //Accessing global variables 
    $x = 5;
    $y = 10;     
    function myTest3() {
      global $x, $y;
      $y = $x + $y;
    }    
    myTest3();
    echo $y; // outputs 15
    echo "<br>";
    //or
    $x1 = 5;
    $y1 = 10;
    function myTest4() {
      $GLOBALS['y1'] = $GLOBALS['x1'] + $GLOBALS['y1'];
    }
    myTest4();
    echo $y1; // outputs 15
    echo "<br>";
    //Static variable
    function myTest5() {
      static $x2 = 0;
      echo $x2 . "<br>";
      $x2++;
    }      
    myTest5();// 0
    myTest5();// 1
    myTest5();// 2
    echo "<br>";
?>
</body>
</html>