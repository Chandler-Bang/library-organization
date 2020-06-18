<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <title>录入损失</title>

  <style>
  
  html,body 
	{
    width: 100%;
    height: 100%;
	}
	
 * {
        margin: 0;
        padding: 0;
   }

  .divsize 
	{
	width:100%;
	height:100%;
	background-color:#336699;
	}

  .titledemo
		{ 
		  color:white;
		  font-family:仿宋;
		  font-size:80px;
		  font-weight:bold;
		  text-align :center;
		  width:100%;
		  height:30%;
		}	  

    .content
	{
	text-align:center;
	font-family:仿宋;
	color:white;
	font-size:30px;
	font-weight:bold;
	}

.sub
{
text-align:center;
}

select
{
width:120px;
height:30px;
}

input
{
width:120px;
height:20px;
}
</style>
</head>


<body >


  <div class="divsize">
  
  <div class="titledemo">录入损失</div>
  
  <form method="post" action="loss.php">
  
   <div class="content">  
   流水号&nbsp;&nbsp;&nbsp;<input  type="text" name="number"><br/><br/>
   损失类型
            <select name="type">
			<option value="damage">破损</option>
			<option value="loss">遗失</option>
			<option value="overtime">逾期</option>
			</select>
			<br/><br/>
   损失金额&nbsp;<input  type="text" name="cost">
   </div>

  <div class="sub"><br/><br/><input  type="submit" value="提交" style="width:80px;height:30px"></div>
  <div class="sub"><br/><a href="allfunction.html" style="color:white;font-size:20px;">返回主页面</a></div>


  </form>
</div>
</body>
</html>
