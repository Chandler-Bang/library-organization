<!DOCTYPE html>
<html lang="en">
<!--登陆界面，主题色是 #892844-->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>注册</title>
</head>

<body>
<form action="adminInsert.php" method="post">
    <div class="signup-box">
        <h1>注册</h1>

        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="用户名"
                   name="adminname" value="">
        </div>

        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="密码"
                   name="password" value="">
        </div>
        <div class="level">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="select" style="letter-spacing: 0px;"><input type="radio" name="level" value="normal"
                checked="checked" id="normal"><label for="normal">Normal</label></span>
            <span class="select"><input type="radio" name="level" value="super" id="normal"><label
                for="normal">Super</label></span>            
        </div>
        <input class="button" type="submit"
               name="signup" value="注册">
    </div>
</form>
</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url() no-repeat;
        background-size: cover;
    }

    .signup-box {
        width: 280px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: ;
    }

    .signup-box h1 {
        float: left;
        font-size: 40px;

        border-bottom: 5px solid #892844;
        margin-bottom: 50px;
        padding: 13px;
    }

    .textbox ,.level{
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid #892844;
    }

    .fa {
        width: 20px;
        float: left;
        text-align: center;
    }

    .textbox input {
        border: none;
        outline: none;
        background: none;

        font-size: 18px;
        float: left;
        margin: 0 10px;
    }

    .button {
        width: 100%;
        padding: 8px;
        color: #ffffff;
        background: none #892844;
        border: none;
        border-radius: 6px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
    }
    /* .level {
        border: none;
        font-size: 18px;
        margin: auto;
        align: center;
        float: left;
        width: 100%;
    } */
</style>
