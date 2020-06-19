<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>上架新书</title>

    <style>

        html,body
        {
            width: 100%;
            height: 100%;
        }
        * {
            margin: 0;
            padding: 0;
        }

        #divsize
        {
            width:100%;
            height:100%;
            background-color:#336699;
        }

        #titledemo
        {
            color:white;
            font-family:仿宋;
            font-size:80px;
            font-weight:bold;
            text-align :center;
            width:100%;
            height:10%;
        }

        .content
        {
            text-align:center;
            font-family:仿宋;
            color:white;
            font-size:30px;
            text-align:center;
            position:absolute;
            top:30%;
            left:27%;
        }

        .span1
        {
            width:100px;
            height:40px;
            position:absolute;
            top:80%;
            left:43%;
        }

        .span2
        {
            width:100px;
            height:40px;
            position:absolute;
            top:80%;
            left:60%;
        }

    </style>
</head>


<body >


<div id="divsize">

    <div id="titledemo">上 架 新 书</div>

    <form method="post" action="newbk.php">

        <div class="content">
            图书编号<input  type="text" name="bookid">
            图书名&nbsp;&nbsp;<input  type="text" name="bookname"> <br/><br/>
            在馆状态<input  type="text" name="inlib">
            图书状态<input  type="text" name="status"><br/><br/>
            图书价格<input  type="text" name="price">
            上架时间<input  type="text" name="time"><br/><br/>
            借阅频度<input  type="text" name="frequency">
            图书类别<input  type="text" name="category">
        </div>

        <span class="span1"><a href="allfunction.html" style="color:white;font-size:20px;">返回主页面</a></span>
        <span class="span2"><input  type="submit" value="提交" style="width:80px;height:30px"></span>

    </form>
</div>
</body>
</html>
