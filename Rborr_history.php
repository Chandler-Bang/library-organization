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
            width: 80px;
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
    <div class="head">查询读者借阅历史</div>
    <form method="POST" action="Rborr_historyS.php">
        
				请输入读者号：<input name='readerno' type='text'/></br>
		<input class="button" type="submit" name="search" value="查询"></br>
    </form>
	<a href='main.php' >返回首页</a></br>
</body>

</html>
