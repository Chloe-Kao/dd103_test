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
            padding: 20px 50px ;
            
        }
    input{
            color: #0e8e6f;
            padding: 2px 0;
        }
    </style>



<body>
        <h3>申請會員</h3>
       <table cellspacing="2">
       <tr>
           <td class="first"><p>姓名：</p></td>
           <td><?php echo $_GET["memName"] ?></td>
       </tr>
       <tr>
           <td class="first"><p>帳號：</p></td>
           <td><?php echo $_GET["memId"] ?></td>
       </tr>
       <tr>
           <td class="first"><p>密碼：</p></td>
           <td><?php echo $_GET["memPsw"] ?></td>
       </tr>
       <tr>
           <td class="first"><p>e-mail：</p></td>
           <td><?php echo $_GET["email"] ?></td>
       </tr>
       <tr>
           <td class="first"><p>性別：</p></td>
           <td><?php echo $_GET["sex"] ?></td>
       </tr>
       <tr>
           <td class="first"><p>生日：</p></td>
           <td><?php echo $_GET["birthday"] ?></td>
       </tr>
       <tr>
           <td class="first"><p>聯絡電話：</p></td>
           <td><?php echo $_GET["tel"] ?></td>
       </tr>
   </table>

    
</body>
</html>