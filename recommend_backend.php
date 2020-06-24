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

		html,
		body {
			height: 100%;
			background-color: rgb(173, 169, 129);
		}


		.head {
			text-align: center;
			font-family: Microsoft Yahei;
			font-size: 90px;
			font-weight: bold;
			color: white;
			height: 40%;
		}

		table {
			text-align: center;
			margin: 0px auto;
			border: 5px double;

			width: 35%;
		}

		a {
			color: white;
			font-size: 20px;
		}

		.bottom {
			text-align: center;
		}
	</style>
</head>


<body>

	<?php
	$type = $_POST['type']; // 搜索类型传入本页面
	$mysqli = mysqli_connect("localhost", "root", "", "library");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
	}
	// echo 'sucessful to connect to MySQL!<br/>';
	// 输出表格
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
	if ($type == 'hot') {
		$str = "select bookName,category,frequency from book order by frequency DESC limit 10"; //排名前十的图书
		echo "<div class='head'><br>热书书单</div>";
		echo "<tr><td>图书名</td><td>图书类别</td><td>频度</td></tr>";
	}
	if ($type == 'latest') {
		$str = "select bookName,category,importDate from book order by importDate DESC limit 10";
		echo "<div class='head'><br>新书书单</div>";
		echo "<tr><td>图书名</td><td>图书类别</td><td>上架时间</td></tr>";
	}
	if ($res = mysqli_query($mysqli, $str)) {
		while ($row = mysqli_fetch_row($res)) {
			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
		}
	}

	echo "</table>";
	// 表格输出完毕
	echo "<div class='bottom'><br><a href='recommend.php' >返回上一页面</a></br>";
	echo "<a href='main.php' ><br>回到首页</a></br></div>";
	mysqli_close($mysqli);  //还差美化界面 -> TODO: 等测试阶段进行
	?>
</body>

</html>