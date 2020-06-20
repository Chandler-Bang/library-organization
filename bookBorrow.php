<?php
$readerNo=$_REQUEST['readerNo'];
$bookNo=$_REQUEST['bookNo'];
date_default_timezone_set(Asia);//设置为北京时间
$borrowDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
//插入书籍借阅信息命令
$demand = "INSERT INTO borrowBook(readerNo,bookNo,borrowDate) values('$readerNo','$bookNo','$borrowDate')";
$res1=mysqli_query($mysqli,$demand);
$demand2="UPDATE book SET frequency=frequency+1 where bookNo='$bookNo'";
if ($res1) {
    echo '<script>alert("借书成功");location="borrowpage.php";</script>';
    mysqli_query($mysqli,$demand2); //借书成功，借书频率+1
} else {
    echo '<script>alert("失败");location="borrowpage.php";</script>';
}
mysqli_close($mysqli);
?>
<a href="main.php">回到首页</a>
