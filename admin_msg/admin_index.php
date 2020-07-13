<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	.table-style{
		 background: #00CDCD;
		border-collapse: 50px;
	}
	#th{
	 
	}

</style>
</head>

<body>
	
<table frame=void rules=none border="1" class="table-style"  align="center" >
	
  <tr>
   <th><image src="image/rentou.png"></th>
   <th><font color="#FFFAFA">当前登陆管理员</font></th>
   <th><font color="#FFFAFA">主页</font></th>
  <th><font color="#FFFAFA"><a href="../Backstage/Backstage.html"> 发布文章</a></font></th>
   <th><font color="#FFFAFA"><a href="../Backstage/Content_index1.php">文章管理</a></font></th>
   <th><font  color="#FFFAFA">栏目管理</font></th>
  <th><image src="image/fangzi.png"></th>
	
 <th><font  color="#FFFAFA">内容管理系统后台</font></th>

  </tr>

  

</table>

 


</body>
</html>
<?php 
header("content-type:text/html;charset=utf-8");  //设置编码
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cms";

$id ="";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 
$sql = "SELECT id, name, age, Wy, zhiwu, bumen FROM adminmsg";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["zhiwu"]. " " . $row["age"]. "<br>";

    }
} else {
    echo "0 结果";
}
 
mysqli_close($conn);

?>