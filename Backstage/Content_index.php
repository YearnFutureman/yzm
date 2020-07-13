<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style> 
	.table-b table td{border:10px solid #F00
					 margin-top:50px;

	} 
	/* css注释：只对table td标签设置红色边框样式 */ 

	</style> 

</head>
<body background="image/banner.jpg">

<div class="table-a" > 
<table width="400" border="0" cellspacing="0" cellpadding="0" align="center"> 
<tr> 
<td width="300ox">文章标题</td> 
<td width="300px">栏----目</td> 
<td width="300">作----者</td> 
<td width="300">关 键 字</td> 
<td width="300">内容提要</td> 
<td width="300">文章正文</td> 
</tr> 
<tr> 
<td>CSSS</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
</tr> 

<tr> 
<td>CSS5</td>
<td>CSS5</td> 
<td>CSS5</td>  
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
</tr> 

<tr> 
<td>CSS5</td>
<td>CSS5</td>  
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
</tr> 

<tr> 
<td>CSS5</td>
<td>CSS5</td>  
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
</tr> 

<tr> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
<td>CSS5</td> 
</tr> 

</table> 
</div> 

	
</body>
</html>


<?php 


header("content-type:text/html;charset=utf-8");  //设置编码
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cms";


// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 
$sql = "SELECT id, lanmu, zuozhe, nrty, wenzhang, gjz, wenzhang FROM artic";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id" . $row["id"]. "栏目" . $row["lanmu"]. "作者" . $row["zuozhe "]."关键字".$row['gjz ']."内容:".$row['nrty']."文章栏目".$row['wenzhang    '];
    }
} else {
    echo "0 结果";
}
 
 
mysqli_close($conn);

?>
