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
        印出<br>
        1=1<br>
        1+2=3<br>
        1+2+3=6<br>
        1+2+3+4=10<br>
        …<br>
        1+2+3+ ……..+10=55</h3>


   
<?php

     for($i=1;$i<=10;$i++){

         $sum = 0;

        for($j=1;$j<=$i;$j++){

            $sum+=$j;

            if($j<$i){ 

                echo $j,"+";

            } elseif($j==$i){

                 echo $j."=";

            }

    };

    echo $sum."<br>";

    };

?>
</body>

</html>