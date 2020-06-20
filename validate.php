<?php
$admin = $_REQUEST['adminname'];
$password = $_REQUEST['password'];
if($admin=="" || $password==""){
    echo '<script type="text/javascript">alert("用户名或密码不能为空");location="index.php";</script>';
}
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
$demand = "select password from Admin where adminname = '$admin'";
$res = mysqli_query($mysqli, $demand);
$power = mysqli_fetch_object($res);
if ($power->password == $password) {
    header('location:main.php');
} else {
    echo '<script type="text/javascript">alert("用户名或密码错误，请重新登陆");location="index.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
