<?php
$bookNo=$_REQUEST['bookNo'];
$lossResult=$_REQUEST['lossResult'];
date_default_timezone_set(Asia);//设置为北京时间
$recordDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
//插入书籍归还信息命令
$demand = "INSERT INTO loss values('$bookNo','$lossResult''$recordDate')";
$res=mysqli_query($mysqli,$demand);
if ($res) { //跳转页面
    echo '<script>alert("损失结果录入成功");location="bookloss.php";</script>';
} else {
    echo '<script>alert("损失结果录入失败");location="bookloss.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
?>
