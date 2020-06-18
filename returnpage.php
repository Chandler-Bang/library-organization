<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return books</title>
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

        .serialNumber {
            position: absolute;
            top: 100px;
        }

        .readerNo {
            position: absolute;
            top: 140px;
        }

        .submit {
            position: absolute;
            top: 200px;
            left: 160px;
        }

        .text {
            border: 1px;
            height: 25px;
            border-radius: 3px;
            position: absolute;
            left: 150px;
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
            width: 80px;
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
        <div class="head">归还图书</div>
        <div class="profile">请输入归还相关信息:</div><br>
        <form method="POST" action="bookReturn.php"><!--读者姓名没有通过表单去填写-->
            <div class="serialNumber">
                <span class="Title" style="letter-spacing: 0.5em;">流水号</span><input class="text" type="number"
                    name="serialNumber">
            </div>
            <div class="readerNo">
                <span class="Title">读者编号</span><input class="text" type="text" name="readerNo">
            </div>
            <div class="submit"><input class="button" type="submit" name="button" value="提交"></div>
        </form>
    </div>
    <div class="back"><a href="index.php">返回主界面</a></div>
</body>

</html>
<?php