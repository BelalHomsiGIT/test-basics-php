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
    //Smart function to print array
    function print_array($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    //1-Defining array, Print elements
    echo "(1) <br>";
    $scores = [1, 2, 3];
    $alphabets = array("a"=>"apple", "b"=>"ball", "c"=>"cat");
    print_array($scores);
    print_array($alphabets);

    //2-Count of elements
    echo "(2) <br>";
    echo count($scores) ."<br>";
    echo "<br>";

    //3-Add new one element at the end-Append-
    echo "(3) <br>";
    $scores[]=4; //index is 3
    print_array($scores);
    $alphabets[]="ddd"; //index is 0
    print_array($alphabets);

    //4-Add new multiple elements at the end
    echo "(4) <br>";
    array_push($scores,7,8,9);
    print_array($scores);
    array_push($alphabets,"eee","fff");
    print_array($alphabets);

    //5-Add new  element at the start
    echo "(5) <br>";
    array_unshift($scores,22);
    print_array($scores);

    //6-Remove element from the end of array
    echo "(6) <br>";
    array_pop($scores);
    print_array($scores);
    //7-Remove element at the start of array
    echo "(7) <br>";
    array_shift($scores);
    print_array($scores);

    //8-Check if array has element at position 1
    echo "(8) <br>";
    var_dump (isset($alphabets[1]));//true/it has index=1
    echo"<br>";

    //9-Check if array has value as element 
    echo "(9) <br>";
    var_dump( in_array(7,$scores) );//true/it has element=7
    echo"<br>";

    //10-Check if array has value as element
    echo "(10) <br>";
    var_dump( array_search(7,$scores) );//pos/7 in 4 index
    echo"<br>";

    //11-Merge tow arrays in one
    echo "(11) <br>";
    $mrg=array_merge($alphabets,$scores);
    print_array($mrg); 

    //12-Convert String to Array
    echo "(12) <br>";
    $str="Belal,Homsi,50";
    $arr=explode(",",$str);
    echo "$str  <br>";
    print_array($arr);

    //13-Convert Array to String
    echo "(13) <br>";
    $myArr=["Apple","Banana","Orange"];
    $myStr=implode(" - ", $myArr);
    print_array($myArr);
    echo $myStr . "<br>";

    //14-Sort array in ascending order
    echo "(14) <br>";
    sort($scores);
    print_array($scores);

    //15-Sort array in descending order
    echo "(15) <br>";
    rsort($scores);
    print_array($scores);

    //16-Sort associative array according to the value
    echo "(16) <br>";
    asort($alphabets);
    print_array($alphabets);

    //17-in descending order
    echo "(17) <br>";
    arsort($alphabets);
    print_array($alphabets);

    //18-Sort associative array according the key
    echo "(18) <br>";
    ksort($alphabets);
    print_array($alphabets);

    //19-in descending order
    echo "(19) <br>";
    krsort($alphabets);
    print_array($alphabets);

    //20-Filter the array
    echo "(20) <br>";
    $evens=array_filter($scores, function($ele){
        return $ele % 2 === 0;
    });
    print_array($evens);

    //21-diff
    echo "(21) <br>";
    $odds= array_diff($scores,$evens);
    print_array($odds);

    //22-Mapping the array,"Whta about Arrow Function?"
    echo "(22) <br>";
    function fn($n) { return $n * $n; }
    $squares=array_map( 'fn' , $scores);
    print_array($squares);

    //23-Reducing action,as sum elements
    echo "(23) <br>";
    function sm($v1,$v2){ return $v1 + $v2;}
    $sumArr=array_reduce($scores,'sm');
    echo "$sumArr <br>";

    //24- Flipping alphabets array 
    echo "(24) <br>";           
    $result = array_flip($alphabets);
    print_array($result);
    
    //25-Tow Dimensions Array-use nested loops
    echo "(25) <br>";
    $arr2d=[ [1,4,5], [6,-7,2], [0,1,0], [0,8,11] ];
    for($i=0; $i<4; $i++) {
        echo "Row-" . $i . ": ";
        for($j=0; $j<3; $j++) {
            echo $arr2d[$i][$j] . "  ";
        }
        echo "<br>";
    }
    echo "<br>";

    //26-or
    echo "(26) <br>";
    $arr2dm=[
        [1,4,5],
        [6,-7,2],
        [0,1,0],
        [0,8,11]
    ];
    $rows=count($arr2dm);
    $cols=count($arr2dm[0]);
    for($i=0; $i<$rows; $i++) {
        echo "Row-" . $i . ": ";
        for($j=0; $j<$cols; $j++) {
            echo $arr2d[$i][$j] . "  ";
        }
        echo "<br>";
    }
    echo "<br>";

    //27-or
    echo "(27) <br>";
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );        
    for ($row = 0; $row < count($cars); $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < count($cars[$row]); $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    //28-Using foreach with Associative Array($cars)
    echo "(28) <br>";
    foreach($cars as $car){
        foreach($car as $item => $val){
            echo "$val ";
        }
        echo "<br>";
    }

    //29-Put the data in table
    echo "(29) <br>";
    echo "CARS <br>";
    echo "<table style='width:12%; border:2px solid'>";
        foreach($cars as $car){
            echo "<tr>";
            foreach($car as $item => $val){
                echo "<td style='border:1px solid'> $val </td>";
            }
            echo "</tr>";
        }
    echo "</table>";
    echo "<br>";
    
    ?>
</body>
</html>