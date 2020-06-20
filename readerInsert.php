<?php
$readerNo=$_REQUEST['readerNo'];
$readerName=$_REQUEST['readerName'];
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
//插入读者信息命令
$demand = "INSERT INTO reader values('$readerNo','$readerName')";
$res=mysqli_query($mysqli,$demand);
if ($res) {
    echo '<script>alert("插入成功");location="readerins.php";</script>';
} else {
    echo '<script>alert("插入失败");location="readerins.php";</script>';
}
mysqli_free_result($res);
mysqli_close($mysqli);
?>
<a href="main.php">回到首页</a>