<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <title>登记新读者</title>

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

.span1
{
text-align:center;
}

</style>
</head>


<body >


  <div class="divsize">
  
  <div class="titledemo">登记新读者</div>
  
  <form method="post" action="readerInsert.php">
  
   <div class="content">  
   读者号&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="id"><br/><br/>
   读者姓名&nbsp;&nbsp;<input  type="text" name="name">
   </div>

  <div class="span1"><br/><input  type="submit" value="提交" style="width:80px;height:30px"></div>
  <div class="span1"><br/><a href="main.php" style="color:white;font-size:20px;">返回主页面</a></div>


  </form>
</div>
</body>
</html>
