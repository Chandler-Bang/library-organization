<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>记录查询</title>
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
$type=$_POST['type']; // 搜索类型传入本页面
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} 
// 为输出表格做准备
$str = "SELECT * FROM $type";
$res=mysqli_query($mysqli,$str);
if(!$res){
    echo "列表生成失败，请联系数据库管理员";
    mysqli_close($mysqli);
}
if($type=='fine'){
    $title="<div class='head'><br>罚款记录</div>";
    $head="<tr><td>流水号</td><td>读者号</td><td>图书编号</td><td>罚款</td><td>备注</td></tr>";
} else {
    $title="<div class='head'><br>损失记录</div>";
    $head="<tr><td>图书编号</td><td>损失结果</td><td>损失记录日期</td></tr>";
}
// 输出表格
echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo $title;
echo $head;
while($row=mysqli_fetch_row($res)){
    if($type=='fine'){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
    } else {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
}

echo "</table>";
// 表格输出完毕
echo "<div class='bottom'><br><a href='recommend.php' >返回上一页面</a></br>";
echo "<a href='main.php' ><br>回到首页</a></br></div>";
mysqli_close($mysqli);  
?>
</body>
</html>