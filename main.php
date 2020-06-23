<!DOCTYPE html>
<html lang="en">

<head>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<style>
* {
            margin: 0px;
            padding: 0px;
        }
		
    .head {
            text-align: center;
			font-family:仿宋;
		  font-size:80px;
		  font-weight:bold;
		 color:white;
		 height:32%;
        }
	

	html,body   
	{
     width:100%;
     height:100%;
	}
	    
		
    .divsize   
		{
		width:100%;
		height:100%;
		background-color:rgb(173, 169, 129);
		text-align:center;
		}
		

 
	  a   
	   {
	   color:#696969;
	   font-size:25px;
	   }
	   
	.tablepos
	{

	margin:auto;
	width:60%;
	height:50%;
	
	
	}
	   
	  
</style>
</head>



<body>
<div class="divsize">

<div class="head"><br>欢迎来到图书管理系统</div>
<br>
<table class="tablepos" >
<tr >  <td> <a href="borrowpage.php">👍借阅图书</a> </td>  <td ><a href="Bstate.php" >🔍查询图书在馆状态</a></td>  <td ><a href="addnewbook.php">📚上架新书</a></td>  </tr>
<tr >  <td ><a href="returnpage.php">👏归还图书</a> </td>  <td ><a href="Bborr_history.php">🔍查询图书借阅历史</a></td>  <td ><a href="readerins.php">👨‍👩‍👧‍👦新增读者</a></td>  </tr>
<tr >  <td ><a href="recommend.php">🔝热书推荐</a> </td>  <td ><a href="Rborr_history.php">🔍查询读者借阅记录</a></td><td ><a href="finepage.php">💴逾期罚款</a></td></tr>
<tr >  <td ><a href="index.php">📊数据统计</a> </td>  <td ><a href="bookloss.php">✍书籍损失记录</a></td><td ><a href="index.php">👋退出登录</a></td></tr>
</table>

</div>

</body>
</html>