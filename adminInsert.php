<?php
$admin=$_REQUEST['adminname'];//管理员账号
$paswrd=$_REQUEST['password'];//管理员密码
$level=$_REQUEST['level'];
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 

//插入管理员信息命令
$demand = "INSERT INTO admin values('$admin','$paswrd','$level')";
$res=mysqli_query($mysqli,$demand);
if ($res) {
    echo '<script>alert("管理员信息录入成功");location="signup.php";</script>';//这里的location界面需要商榷
} else {
    echo '<script>alert("管理员信息录入失败");location="signup.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
?>
