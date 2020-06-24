<?php
$admin = $_REQUEST['adminname'];
$password = $_REQUEST['password'];
if ($admin == "" || $password == "") {
    echo '<script type="text/javascript">alert("用户名或密码不能为空");location="index.php";</script>';
    exit;
}
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
}
$demand = "select password,level from Admin where adminname = '$admin'";
$res = mysqli_query($mysqli, $demand);
$power = mysqli_fetch_row($res);
if ($power[0] == $password) {
    if ($power[1] == 'normal') {
        header('location:main.php');
    } else if ($power[1] == 'super') {
        header('location:main.su.php');
    } else {
        echo '<script type="text/javascript">alert("未知错误，请联系管理员");location="index.php";</script>';
        exit;
    }
} else {
    echo '<script type="text/javascript">alert("用户名或密码错误，请重新登陆");location="index.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
