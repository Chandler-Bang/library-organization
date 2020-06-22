<?php
$serialNum=$_REQUEST['serialNumber'];
$readerNo=$_REQUEST['readerNo'];
$bookNo=$_REQUEST['bookNo'];
date_default_timezone_set('Asia');//设置为北京时间
$returnDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
// 第一步: 判断图书是否存在
$bookCheck = "SELECT bookNo from book where bookNo = '$bookNo'";
$checkQuery = mysqli_query($mysqli,$bookCheck);
if(!$checkQuery){
    mysqli_close($mysqli); // 图书不存在，停止查询
    echo '<script>alert("抱歉，此图书可能不存在");location="returnpage.php";</script>';
}
//插入书籍归还信息命令
$demand = "INSERT INTO returnBook values($serialNum,'$readerNo','$bookNo','$returnDate')";
$res=mysqli_query($mysqli,$demand); //执行还书的操作 -- 在returnBook表中插入新行
$demand2 = "UPDATE book set bookStatus='normal',inLibStatus='available' where bookNo = '$bookNo'";
if ($res) {
    mysqli_query($mysqli,$demand2);
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
