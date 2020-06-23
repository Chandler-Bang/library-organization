<?php
$bookNo=$_REQUEST['bookNo'];//书籍编号
$bookName=$_REQUEST['bookName'];//书名
$importDate=$_REQUEST['importDate'];//导入日期
$bookPrice=$_REQUEST['bookPrice'];//书籍价格(2位小数点)
$frequ=0;//借书频率
$category=$_REQUEST['category'];//书籍种类
$inLibStatus = 'available';
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
    echo '<script>alert("新书录入失败");location="addnewbook.php";</script>';
}
?>
