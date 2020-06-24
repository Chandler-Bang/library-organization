<?php
$readerNo=$_REQUEST['readerNo'];
$bookNo=$_REQUEST['bookNo'];
date_default_timezone_set('Asia/Shanghai');//设置为北京时间
$borrowDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
// 第一步: 判断此书是否存在、是否可借
$existence = "SELECT COUNT(1) FROM book WHERE bookNo='$bookNo'";
$existenceR = "SELECT COUNT(1) FROM reader WHERE readerNo='$readerNo'";
$statusCheck = "SELECT inLibStatus from book where bookNo = '$bookNo'";
$statusQuery = mysqli_query($mysqli,$statusCheck);
$extRes = mysqli_query($mysqli,$existence);
$exist = mysqli_fetch_row($extRes);
$extResR = mysqli_query($mysqli,$existenceR);
$existR = mysqli_fetch_row($extResR);
if($exist[0]<1){
    mysqli_close($mysqli);
    echo '<script>alert("借书失败，可能您输入的图书编号并不存在");location="borrowpage.php";</script>';
    exit;
}
if($existR[0]<1){
    mysqli_close($mysqli);
    echo '<script>alert("借书失败，可能您输入的读者编号并不存在");location="borrowpage.php";</script>';
    exit;
}

$status = mysqli_fetch_row($statusQuery);
if($status[0]!='available'){
    mysqli_close($mysqli);
    echo '<script>alert("借书失败，此书现在处于不可借状态");location="borrowpage.php";</script>';
    exit;
}
// 第二步: 修改图书状态（图书改为锁定状态，阻止冲突）
$locker = "UPDATE book set inLibStatus='locked' where bookNo='$bookNo'";
$lockQUery = mysqli_query($mysqli,$locker);
if(!$lockQUery){
    mysqli_close($mysqli);
    echo '<script>alert("图书锁定失败，请联系数据库维护人员");location="borrowpage.php";</script>';
    exit;
}
// 第三步: 登记借阅记录
$logger = "INSERT INTO borrowBook(readerNo,bookNo,borrowDate) values('$readerNo','$bookNo','$borrowDate')";
$logQuery = mysqli_query($mysqli,$logger);
if(!$logQuery){
    mysqli_close($mysqli);
    echo '<script>alert("图书借阅记录登记失败，请联系数据库维护人员");location="borrowpage.php";</script>';
    exit;
}
// 第四步: 更新图书状态(借书频率+1，图书改为不可借)
$update = "UPDATE book set inLibStatus='unavailable',frequency=frequency+1 where bookNo='$bookNo'";
$updateQuery = mysqli_query($mysqli,$update);
if(!$logQuery){
    mysqli_close($mysqli);
    echo '<script>alert("图书状态更新失败，请联系数据库维护人员");location="borrowpage.php";</script>';
    exit;
}
echo '<script>alert("借书成功");location="borrowpage.php";</script>';
mysqli_close($mysqli);
