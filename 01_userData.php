<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
        body{
            font-family:微軟正黑體;
            color:#0e8e6f;
            }
		
		table{
			width: 30%;
			border: 1px solid #0e8e6f;
            text-align: center;
			margin-bottom:20px;
		}

		th{
			background-color: #0e8e6f;
			color: white;
			padding: 10px 0;
		}

		td{
			border-bottom: 1px solid #0e8e6f;
			color: #0e8e6f;
			padding: 10px 0;
		}	

</style>
<body>
    <?php
    $name="小丸子";
    $age="秘密";
    $address="漫畫走廊";
    echo"<h2>個人檔案</h2>";
    echo"<table>",
    "<tr><th>姓名：</th>",
   "<td>$name</td> </tr>",
   "<tr><th>年齡：</th>",
   "<td>$age</td> </tr>",
   "<tr><th>地址</th>",
   "<td>$address</td> </tr>",
    "</table>";


    ?>
</body>
</html>