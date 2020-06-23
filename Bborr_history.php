<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new book</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        html,
        body {
            height: 100%;
        }

        h1 {
            text-align: center;
            background-color: red;
        }

        .box {
            border: 5px solid;
            border-radius: 10px;
            top: 50px;
            background-color: rgb(173, 169, 129);
            margin: 0px auto;
            width: 400px;
            height: 210px;
            position: relative;
        }

        .head {
            text-align: center;
            font: 32px kaiti;
            color: white;
            background-color: brown;
            font-weight: bold;
            line-height: 40px;
            padding: 10px;

        }

        .profile {

            color: white;
            font: 20px kaiti;
            margin: 5px 5px;
        }

        .submit {
            position: absolute;
            top: 150px;
            left: 160px;
        }

        .text {
            border: 3px;
            height: 25px;
            border-radius: 5px;
            position: absolute;
            left: 150px;
            width: 220px;
        }

        .Title {
            color: white;
            font: 15px kaiti;
            margin-left: 10px;

        }

        .button {
            margin: 0 auto;
            padding: 8px;
            background-color: #892844;
            color: white;
            width: 90px;
            border-radius: 6px;
        }

        .button:hover {
            background-color: rgb(62, 12, 85);
        }

        .back {
            position: absolute;
            top: 95%;
            left: 10px;
        }

        a {
            text-decoration: none;
            background-color: darkgoldenrod;
            color: white;
            border-radius: 2px;
            padding: 5px;
        }
        .bookNo {
            position: absolute;
            top: 100px
        }
    </style>
</head>


<body>
    <div class="box">
        <div class="head">查询图书借阅历史</div>
        <br>
        
        <form method="POST" action="Bborr_historyS.php">
		
            <div class="bookNo">
                <span class="Title" style="letter-spacing: 0.2em;">请输入图书编号</span><input class="text" type="text"name="readerno"><br><br>
            </div>
			
           
		
			
            <div class="submit"><input class="button" type="submit" name="button" value="查询"></div>
        </form>
    </div>
    <div class="back"><a href="main.php">返回首页</a></div>
</body>

</html>
<?php