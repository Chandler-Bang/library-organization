<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book loss</title>
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
            top: 100px;
            background-color: rgb(173, 169, 129);
            margin: 0px auto;
            width: 400px;
            height: 300px;
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

        .bookNo {
            position: relative;
            /*top: 100px;*/
        }

        .lossResult {
            position: relative;
            /*top: 140px;*/
        }

        .submit {
            position: absolute;
            top: 200px;
            left: 160px;
        }

        .text {
            border: 3px;
            height: 25px;
            border-radius: 5px;
            position: absolute;
            left: 150px;
            width: 200px;
        }

        .Title {
            color: white;
            font: 20px kaiti;
            margin-left: 30px;

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
    </style>
</head>


<body>
    <div class="box">
        <div class="head">录入图书损失信息</div>
        <br>
        <div class="profile">请输入损失相关信息:</div><br>
        <form method="POST" action="loss.php">
            <div class="bookNo">
                <span class="Title" style="letter-spacing: 0.5em;">图书编号</span><input class="text" type="text"
                    name="bookNo"><br><br>
            </div>
            <div class="lossResult">
                <span class="Title" style="letter-spacing: 0.5em;">损失结果</span><input class="text" type="text" name="lossResult">
            </div>
            <div class="submit"><input class="button" type="submit" name="button" value="提交"></div>
        </form>
    </div>
    <div class="back"><a href="main.php">回到首页</a></div>
</body>

</html>
<?php