<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 微軟正黑體;
        color: #0e8e6f;
        text-align: center;
    }
    table{
        margin: 0 auto;
    }
    table,
        tr,
        td {
            border: 1px solid;
            text-align: center;

        }

        td:nth-child(2) {
            display: flex;
            justify-content: flex-start;
            text-align: center;
        }
    input{
            color: #0e8e6f;
        }
</style>
<body>
<h2>輸入所購買的等級及公斤數,並算出小計</h2>
    <?php
        $level = $_REQUEST["level"];
        $kilo = $_REQUEST["kilo"];
    
        switch($level):
            case 1:
                if($kilo<40):
                    echo $kilo * 30;
                elseif($kilo<100):
                    echo $kilo * 25;
                else:
                    echo $kilo * 20;
                endif;
        break;
            case 2:
                if($kilo<40):
                    echo $kilo * 25;
                elseif($kilo<100):
                    echo $kilo * 20;
                else:
                    echo $kilo * 15;
                endif;
                break;
            case 3:
                if($kilo<40):
                    echo $kilo * 20;
                elseif($kilo<100):
                    echo $kilo * 15;
                else:
                    echo $kilo * 10;
                endif;
                break;
                endswitch;
    

        $totalMoney = $kilo * $level;
		echo "購買公斤數為:",$kilo,"<br>";
		echo "購買等級為:",$level,"<br>";
		echo "總計為:",$totalMoney,"<br>";
    ?>
</body>
</html>