<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书分类</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .head {
            margin-top: 50px;
            text-align: center;
            text-decoration: underline;
            text-underline-position: below;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            border: none;
            background-color: #892844;
            width: 150px;
            padding: 10px 10px;
            color: white;
            margin-top: 20px
        }

        .select {
            margin: 0 50px;
        }
    </style>
</head>

<body>
    <div class="head">记录罚款信息</div>
    <form method="POST" action="fine.php">
	            请输入流水号：<input name='serialnumber' type='text'/></br>
				请进行违约备注：<input name='note' type='text'/></br>
				请输入罚款金额：<input name='fine' type='text'/></br>
		<input class="button" type="submit" name="insert" value="打印罚款信息"></br>
    </form>
	<a href='allfunction.php' target='finepage.php'><center>返回主页面</center></a></br>
</body>

</html>
<?php