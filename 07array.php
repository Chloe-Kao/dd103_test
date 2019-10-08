<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>
隨機產生10個介於1-~100之間的數放在陣列中, 
印出這10個數, 總和 , 最小值 , 最大值

</h3>

<?php

$arr = array();
$max = 0 ;
$min = 100;
$sum = 0;

for($i=0;$i<10;$i++){

     $arr[$i]=rand(1,100);

     $sum += $arr[$i];

     if($arr[$i]>$max){
         $max = $arr[$i];
     };
     if($arr[$i]<$min){
        $min = $arr[$i];
     };



};

echo "陣列:";

foreach($arr as $i=>$value){

   if($i<9){ echo $value.",";}else{
       echo  $value,"<br>";
   }
    
}
echo "總和:".$sum."<br>";
echo "最大值:".$max."<br>";
echo "最小值:".$min."<br>";

?>
    
</body>
</html>