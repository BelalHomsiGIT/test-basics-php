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
    //1-Function-Intro
    echo "(1) <br>";
    function fun1(){
        echo "Hello Man" . "<br>";
    }
    fun1();
    echo "<br>";

    //2-Function with argument
    echo "(2) <br>";
    function fun2($user){
        echo "Hello $user" . "<br>";
    }
    fun2('Belal'); //calling
    echo "<br>";

    //3-Function with argument&return
    echo "(3) <br>";
    function fun3($user){
        return "Hello " . $user;
    }
    $res=fun3("Sami");
    echo $res;//or echo fun3("Sami")
    echo "<br><br>";  

    //4-Sum tow int numbers
    echo "(4) <br>";
    function sum2n($n1,$n2){
        $s=$n1+$n2;
        echo $s;
    }
    sum2n(7,3);
    echo "<br>";
    sum2n(3.25,1.5);//output 3.75 , it's float!
    echo "<br><br>";

    //5-Auto casting the parameters
    echo "(5) <br>";
    function sum2int(int $n1, int $n2){
        $s=$n1+$n2;
        echo $s . "<br>";
    }
    sum2int(3.25,1.5);//output 4
    sum2int(8,'10');
    echo "<br>";
    
    //6-Test by Division
    echo "(6) <br>";
    function div2n($n1,$n2){
        $s=$n1/$n2;
        echo $s;
    }
    div2n(4.5,2);//output 2.25
    echo "<br><br>";

    //7-Test int parameters
    echo "(7) <br>";
    function div2int(int $n1,int $n2){
        $s=$n1/$n2;
        echo $s;
    }
    div2int(4.5,2);//output 2
    echo "<br><br>";   

    //8-Declare type Return
    echo "(8) <br>";
    function div2intrf($n1,$n2):float{
        $s=$n1/$n2;
        return $s;
    }
    echo div2intrf(5,2);//output 2.5
    echo "<br><br>";

    //9-Passing args by Reference,as in Swapping
    echo "(9) <br>";
    function swap2vars(&$n1, &$n2){
        $temp=$n1;
        $n1=$n2;
        $n2=$temp;
    }
    $x=25; $y= 18;
    echo "Original: x=$x , y=$y <br>";
    swap2vars($x,$y);
    echo "Swapping: x=$x , y=$y <br>";
    echo "<br>";

    //10-Passing array and receive it.
    echo "(10) <br>";
    function sumArrItems1($arr){
        $s=0;
        foreach($arr as $item){
            $s+=$item;
        }
        echo "Sum=$s";
    }
    $myArr1=[5,1,3,8,2];    
    sumArrItems1($myArr1);
    echo "<br>";
    $myArr2=[5,10,21];
    sumArrItems1($myArr2);
    echo "<br><br>";

    //11-When we don't know the number of arguments
    //we use ( ... ) in parameters list,
    //write ...$var, and work as Array
    echo "(11) <br>";
    function anyArgsNum(...$args){
        $s=0;
        foreach($args as $par){
            $s+=$par;
        }
        echo "Sum=$s <br>";
    }
    anyArgsNum(5,10);
    anyArgsNum(3,9,6,1,7);
    echo "<br>";

    //12-We can recieve the array by separated parameters
    echo "(12) <br>";
    function arrTopars($a,$b,$c){
        $s=$a+$b+$c;
        echo "Sum=$s <br>";
    }
    $nums=[1,5,9];
    arrTopars(...$nums);//note: ...
    echo "<br>";

    //13-Defalt value for arguments.
    echo"(13) <br>";
    function div2nums($num1=0,$num2=1){
        return $num1/$num2;
    }
    echo div2nums(5,4)."<br>";//output 1.25
    echo div2nums(7)."<br>";//output 7
    echo div2nums()."<br><br>";//output 0

    //14-If first parameter with default
    //value, and the last one is without:
    echo"(14)<br>";
    function div2nums1($num1=0, $num2){
        return $num1/$num2;
    }
    echo div2nums1(5,4)."<br>";//output 1.25
    echo "div2nums1(7);  //get a fatal error";
    echo "<br><br>";
    
    //15-As C++, the parameter with default
    //value must be at last list:,
    echo"(15)<br>";
    function div2nums2($num1, $num2=1){
        return $num1/$num2;
    }
    echo div2nums2(5,4)."<br>";//output 1.25
    echo div2nums2(5)."<br>";//output 5
    echo "<br>";

    //16-make any variable or parameter as global
    echo "(16) <br>";
    $a=10;
    function test($x){
        $GLOBALS['res'] = $GLOBALS['a'] + $x;
        //NO return $res;
    }
    test(7);
    echo $res;
    echo "<br><br>";

    //17- test again
    echo "(17) <br>";
    function addNumbers1( $a,  $b) {
        return $a + $b;
    }
    echo addNumbers1(5, 6) ."<br>"; 
    echo addNumbers1(6.1, 2.4) ."<br>";  
    echo addNumbers1(1, 1.2) ."<br>"; 
    echo addNumbers1(7, '17') ."<br>";
    echo addNumbers1(3, '10 emps') ."<br>";
    echo addNumbers1(3.1, '10 emps') ."<br>";
    echo "<br>";
    //18-test agian
    echo "(18) <br>";
    function addNumbers2(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers2(5, 6) ."<br>"; 
    echo addNumbers2(6.1, 2.4) ."<br>";  
    echo addNumbers2(1, 1.2) ."<br>"; 
    echo addNumbers2(7, '17') ."<br>";
    echo addNumbers2(3, '10 emps') ."<br>";
    echo addNumbers2(3.1, '10 emps') ."<br>";
    echo "<br>";
    
    //19-Calculator
    echo "(19) <br>";
    function Calc($fn,$operator,$sn){
        if (is_null($fn)){ $fn=0;}
        if (is_null($sn)){ $sn=0;}
        if (empty($operator) || is_null($operator)){ $operator="+";}
        switch($operator){
            case '+': 
                return $fn + $sn;
                break;
            case '-' :
                return $fn - $sn;
                break;
            case '*' :
                return $fn * $sn;
                break;
            case '/' :
                if($sn==0){
                    echo "Error,Divided by zero. <br>";
                    //return null; 
                    break;                   
                }else{
                    return $fn / $sn;
                    break;
                }
            default : 
                return "Invalid Inputs.";
        }        
    }
    echo Calc(8,'+',5)."<br>";
    echo Calc(8,'-',5)."<br>";
    echo Calc(8,'*',5)."<br>";
    echo Calc(8,'/',5)."<br>";
    //
    echo Calc(12,'',5)."<br>";
    echo Calc(10,NULL,9)."<br>";
    echo Calc( 1,'/',NULL)."<br>";
    echo Calc(NULL,NULL,NULL)."<br>";
    echo Calc(12,'#',5)."<br>";
    

    ?>
</body>
</html>