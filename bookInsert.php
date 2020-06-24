<?php
$bookNo=$_REQUEST['bookNo'];//书籍编号
$bookName=$_REQUEST['bookName'];//书名
$bookPrice=$_REQUEST['bookPrice'];//书籍价格(2位小数点)
$frequ=0;//借书频率
$category=$_REQUEST['category'];//书籍种类
$inLibStatus = 'available';
date_default_timezone_set('Asia/Shanghai');//设置为北京时间
$importDate=date("Y-m-d");//自动获取时间(年月日)
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
//插入书籍信息命令
$demand = "INSERT INTO book values('$bookNo','$bookName','$importDate','$inLibStatus',$bookPrice,$frequ,'$category')";
$res=mysqli_query($mysqli,$demand);
if ($res) { //跳转页面
    mysqli_close($mysqli); //查询已经结束，在这里关闭连接
    echo '<script>alert("新书录入成功");location="addnewbook.php";</script>';
} else {
    mysqli_close($mysqli);
    echo '<script>alert("新书录入失败");location="addnewbook.php";</script>';
}
?>
