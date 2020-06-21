<?php
$serialNum=$_REQUEST['serialNumber'];
$readerNo=$_REQUEST['readerNo'];
$bookNo=$_REQUEST['bookNo'];
$fine=$_REQUEST['fine'];
$lossResult=$_REQUEST['lossResult'];

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
//插入罚款信息命令
$demand = "INSERT INTO fine values($serialNum,'$readerNo','$bookNo',$fine,'$lossResult')";
$res=mysqli_query($mysqli,$demand);
if ($res) {
    mysqli_close($mysqli);
    echo '<script>
            var r = confirm("罚款结果录入完毕，是否跳转到登记损失界面？");
            if(r==true){
                location=bookloss.php;
            }else{
                location=finepage.php
            }
          </script>'; 
} else {
    echo '<script>alert("罚款结果录入失败");location="finepage.php";</script>';
    mysqli_close($mysqli);
}
mysqli_free_result($res);
mysqli_close($mysqli);
?>

