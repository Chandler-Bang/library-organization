<?php
$serialNum=$_REQUEST['serialNumber'];
// $readerNo=$_REQUEST['readerNo'];
// $bookNo=$_REQUEST['bookNo'];
$fine=$_REQUEST['fine'];
$lossResult=$_REQUEST['lossResult'];

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
$getINFO = "SELECT bookNo,readerNo FROM returnbook where serialNumber='$serialNum'";
$infoQuery = mysqli_query($mysqli,$getINFO);
$info = mysqli_fetch_row($infoQuery);
$bookNo=$info[0];
$readerNo=$info[1];
//插入罚款信息命令
$demand = "INSERT INTO fine values($serialNum,'$readerNo','$bookNo',$fine,'$lossResult')";
$res=mysqli_query($mysqli,$demand);
if ($res) {
    mysqli_close($mysqli);
    echo '<script>alert("罚款结果录入成功");location="finepage.php";</script>';
} else {
    mysqli_close($mysqli);
    echo '<script>alert("罚款结果录入失败");location="finepage.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
