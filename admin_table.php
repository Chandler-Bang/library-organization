<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>管理员列表</title>
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
			font-size: 60px;
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

	$mysqli = mysqli_connect("localhost", "root", "", "library");
	echo "<div class='head'><br>查询结果</div>";
	$str = "SELECT adminname,level FROM admin ORDER BY level DESC";
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
	echo "<tr><td>管理员用户名</td><td>权限等级</td></tr>";

	if ($res = mysqli_query($mysqli, $str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
	{
		while ($row = mysqli_fetch_row($res)) {
			echo "<tr><td>$row[0]</td><td>$row[1]</td><tr>";
		}
	}
	echo "</table>";
	echo "<a href='main.su.php'><br>回到首页</a></br></div>";
	mysqli_close($mysqli);  //还差美化界面
	?>
</body>

</html>