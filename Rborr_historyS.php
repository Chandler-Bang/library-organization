<?php
$id=$_POST['readerno'];//接收id，为读者输入的读者号

$mysqli = mysqli_connect("localhost", "root", "", "library");

	$str="select book.bookNo,book.bookName,reader.readerNo,reader.readerName,borrowDate,returnDate from book left join borrowbook on book.bookNo=borrowbook.bookNo left join returnbook on borrowbook.bookNo=returnbook.bookNo left join reader on borrowbook.readerNo=reader.readerNo where reader.readerNo='$id' ";  //按读者号查询某图书的借阅历史
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo"<tr align='center'>查询结果</tr>";
echo"<tr><td>图书编号</td><td>图书名</td><td>读者号</td><td>读者名</td><td>借阅日期</td><td>还书日期</td></tr>";

if($res=mysqli_query($mysqli,$str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
{
	while($row=mysqli_fetch_row($res))
    {
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
    }
}
echo "</table>";
echo "<a href='Rborr_history.php' >返回上一页面</a></br>";
echo "<a href='main.php'>回到首页</a></br>";
mysqli_close($mysqli);  //还差美化界面
?>
