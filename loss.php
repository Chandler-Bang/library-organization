<?php
$bookNo=$_REQUEST['bookNo'];
$lossResult=$_REQUEST['lossResult'];
date_default_timezone_set('Asia');//设置为北京时间
$recordDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
// 第一步: 判断图书是否存在
$bookValidate = "SELECT bookNo FROM book where bookNo = '$bookNo'";
if(!mysqli_query($mysqli,$bookValidate)){
    mysqli_close($mysqli);
    echo '<script>alert("操作失败，可能此书不存在");location="bookloss.php";</script>';
}
// 第二步: 修改图书状态
$inLibStatus = ($lossResult=='normal')?'available':'unavailable';
$statusUpdate = "UPDATE book set inLibStatus = '$inLibStatus' where bookNo = '$bookNo'";
if(!mysqli_query($mysqli,$statusUpdate)){
    mysqli_close($mysqli);
    echo '<script>alert("图书状态修改失败");location="bookloss.php";</script>';
}
// 第三步: 登记损失结果
$demand = "INSERT INTO loss values('$bookNo','$lossResult''$recordDate')";
$res=mysqli_query($mysqli,$demand);
if ($res) { //跳转页面
    echo '<script>alert("损失结果录入成功");location="bookloss.php";</script>';
} else {
    echo '<script>alert("损失结果录入失败");location="bookloss.php";</script>';
}
mysqli_close($mysqli);
?>
