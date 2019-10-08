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
    <h3>摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元)</h3>

    <?php

$loop = 0;

$sum = 0;

   do{

    $ball = rand(0,10);

    $sum+=$ball;

    $loop++;


    if($ball!=0){

        echo $ball."<br>";

    };



   }while($ball!=0);

   echo "總共".$loop."次<br>";

   echo "抽到".($sum*100)."元";

?>

</body>
</html>