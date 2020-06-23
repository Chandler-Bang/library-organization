<?php
$serialNum=$_REQUEST['serialNumber'];
$readerNo=$_REQUEST['readerNo'];
$lossResult = $_REQUEST['lossResult'];
date_default_timezone_set('Asia');//设置为北京时间
$returnDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
// 第一步: 判断图书是否存在
$bookCheck = "SELECT bookNo from borrowbook where serialNumber = '$serialNum'";
$checkQuery = mysqli_query($mysqli,$bookCheck);
echo $bookNo;
if(!$checkQuery){
    mysqli_close($mysqli); // 图书不存在，停止查询
    echo '<script>alert("抱歉，此图书可能不存在");location="returnpage.php";</script>';
}
$checkRow = mysqli_fetch_row($checkQuery);
$bookNo=$checkRow[0];

// 第二步: 锁定图书状态，防止出现冲突
$locker = "UPDATE book set inLibStatus='locked' where bookNo='$bookNo'";
$lockQUery = mysqli_query($mysqli,$locker);
if(!$lockQUery){
    mysqli_close($mysqli);
    echo '<script>alert("图书锁定失败，请联系数据库维护人员");location="borrowpage.php";</script>';
}
// 第三步: 判断图书是否造成损失，如果是，登记损失
$inLibStatus = ($lossResult=='normal')?'available':'unavailable';
if($inLibStatus!='available'){
    $lossRecord = "INSERT INTO loss values('$bookNo','$lossResult''$recordDate')";
    mysqli_query($mysqli,$lossRecord);
}
// 第四步: 登记归还记录
$returnRecord = "INSERT INTO returnBook values($serialNum,'$readerNo','$bookNo','$returnDate')";
mysqli_query($mysqli,$returnRecord);
// 第五步: 修改图书状态，解除锁定
$bookStatus = "UPDATE book SET inLibStatus='$inLibStatus' where bookNo = '$bookNo'";
$res = mysqli_query($mysqli,$bookStatus);
if($res){
    mysqli_close($mysqli);
    echo '<script>
            var r = confirm("还书结果录入完毕，是否跳转到罚款界面？");
            if(r==true){
                location=finepage.php;
            }else{
                location=bookReturn.php
            }
          </script>'; 
} else {
    echo '<script>alert("还书操作录入失败");location="returnpage.php";</script>';
    mysqli_close($mysqli);
}
?>
