<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书在馆状态</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
		
        html,body 
		{
            height: 100%;
			background-color:rgb(173, 169, 129);
        }
		
		
		.head
		{
			text-align: center;
			font-family:Microsoft Yahei;
		  font-size:90px;
		  font-weight:bold;
		 color:white;
		 height:40%;
		}
		
		table
		{
			text-align:center;
			margin: 0px auto;
		    border:5px double;
			
			width:35%;
		}
      
	  a
	  {
		  color:white;
		  font-size:20px;
	  }
	  
	  .bottom
	  {
	text-align:center;
	  }
    </style>
</head>

<body>

<?php
$id=$_POST['readerno'];//接收id，为读者输入的读者号

$mysqli = mysqli_connect("localhost", "root", "", "library");
echo"<div class='head'><br>查询结果</div>";
	$str="SELECT book.bookNo,book.bookName,reader.readerNo,reader.readerName,borrowDate,returnDate,borrowbook.serialNumber FROM book left join borrowbook ON book.bookNo=borrowbook.bookNo left join returnbook on borrowbook.bookNo=returnbook.bookNo LEFT JOIN reader ON borrowbook.readerNo=reader.readerNo WHERE reader.readerNo='$id' ";  //按读者号查询某图书的借阅历史
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";

echo"<tr><td>图书编号</td><td>图书名</td><td>读者号</td><td>读者名</td><td>借阅日期</td><td>还书日期</td><td>流水号</td></tr>";

if($res=mysqli_query($mysqli,$str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
{
	while($row=mysqli_fetch_row($res))
    {
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
    }
}
echo "</table>";
echo "<div class='bottom'><br><a href='Rborr_history.php' >返回上一页面</a></br>";
echo "<a href='main.php'><br>回到首页</a></br></div>";
mysqli_close($mysqli);  //还差美化界面
?>
</body>
</html>