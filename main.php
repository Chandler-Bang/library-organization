<!DOCTYPE html>
<html lang="en">

<head>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<style>
    .head {
            margin-top: 50px;
            text-align: center;
			font-family:微软雅黑;
		  font-size:100px;
        }
	

	html,body   
	{
     width:100%;
     height:100%;
	 background-color:white;
	}
	    
		
    divsize   
		{
		width:100%;
		height:100%;
		
		}
		
		
 .titledemo   
		{ 
		  color:white;
		  font-family:仿宋;
		  font-size:80px;
		  font-weight:bold;
		  text-align :center;
		  }
		 
		 
	.titlepos  
		{
		position:absolute;
		top:0;
		width:100%;
		height:25%;
		}
		
		
		
   .tablepos  
		{
		
		top:35%;
		left:10%;
		width:100%;
		height:64%;
		}
    td      
	   {
	   font-size:45px;
	   width:30%;
	   }
	   
	  a   
	   {
	   color:#CCCCCC;
	   }
</style>
</head>



<body>
<div id="divsize">
<div class="head">欢迎来到图书管理系统</div>
<div style="text-align:center;">
<table class="tablepos" cellspacing="30px" align="center" style="margin:0px auto;">
<tr style="background-color:#ff9999">  <td align="center"> <a href="Bstate.php" >查询图书在馆状态</a> </td>  <td align="center"><a href="readerins.php">新增读者</a></td>  <td align="center"><a href="bkloss.php">书籍损失记录</a></td>  </tr>
<tr style="background-color:#ff9999">  <td align="center"> <a href="Bborr_history.php">查询图书借阅历史</a></td>  <td align="center"><a href="addnewbook.php">上架新书</a></td>  <td align="center"><a href="fine.php">逾期罚款</a></td>  </tr>
<tr style="background-color:#ff9999">  <td align="center"> <a href="Rborr_history.php">查询读者借阅记录</a></td>  <td align="center"><a href="recommend.php">热书推荐</a></td>  <td align="center"><a href="index.php">退出登录</a></td>  </tr>
<tr style="background-color:#ff9999">  <td align="center"> <a href="borrowpage.php">借阅图书</a></td>  <td align="center"><a href="returnpage.php">归还图书</a></td><td></td></tr>
</table>

</div>

</body>
</html>