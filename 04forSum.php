<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
            font-family:微軟正黑體;
            color:#0e8e6f;
            width:1200px;
            margin: 0;
            }
    
    </style>
</head>
<body>
    <h3>寫程式，設定變數存放一個正整數,並算1到此整數間的總和? 奇數和? 偶數和?</h3>
    <?php
    $max =50;
    echo"計算1到".$max."的各項總和<br>";
    sum();

    function sum(){
        $sum =0;
        global $max;
        for($i=1;$i<=$max;$i++){
            $sum+=$i;
        };
        echo "* 1到".$max."的總和?" .$sum."<br>";
    };
    
    oddsum();
    function oddsum(){
        $sum =0;
        global $max;
        for($j=1;$j<=$max;$j+=2){
            $sum+=$j;
        };
        echo "* 1到".$max."的奇數總和?" .$sum."<br>";
    };

    evensum();
    function evensum(){
        $sum =0;
        global $max;
        for($j=1;$j<=$max;$j+=2){
            $sum+=$j;
        };
        echo "* 1到".$max."的偶數總和?" .$sum."<br>";
    };


    
    ?>
    
</body>
</html>