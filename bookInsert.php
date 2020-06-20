<?php
$bookNo=$_REQUEST['bookNo'];//书籍编号
$bookName=$_REQUEST['bookName'];//书名
$importDate=$_REQUEST['importDate'];//导入日期
$inLibStatus='available'; //在馆状态
$bookStatus= 'normal'; //图书状态
$bookPrice=$_REQUEST['bookPrice'];//书籍价格(2位小数点)
$frequ=0;//借书频率
$category=$_REQUEST['category'];//书籍种类

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
//插入书籍信息命令
$demand = "INSERT INTO book values('$bookNo','$bookName','$importDate','$inLibStatus','$bookStatus',$bookPrice,$frequ,'$category')";
$res=mysqli_query($mysqli,$demand);
if ($res) {
    echo '<script>alert("新书录入成功");location="addnewbook.php";</script>';
} else {
    echo '<script>alert("新书录入失败");location="addnewbook.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
?>
