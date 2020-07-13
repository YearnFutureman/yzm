<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	    <title>比赛列表</title>
	<style> 
	.table-b table td{border:10px solid #F00
					 margin-top:50px;

	} 
	/* css注释：只对table td标签设置红色边框样式 */ 
	
	</style> 

</head>
<body>
	
 <div>
	 <table align="center" >
	     <tr>
	         <th>Id值</th><th>文章标题</th><th>栏----目</th><th>作----者</th><th>关 键 字</th><th>文章正文</th><th>更新时间</th>
	     </tr>
	    <?php 

$a=10;


header("content-type:text/html;charset=utf-8");  //设置编码
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cms";

$records=array();

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 
$sql = "SELECT * from artic";


	$result = mysqli_query($conn, $sql);
 
		$records=array();
     while( $row = mysqli_fetch_array($result )){
        //mysql_fetch_array()函数的作用类似foreach对数组的作用：遍历（结果集）
        //它每次去的结果集的“一行数据”，并“装入”到数组 $record 中
        //该数组的下标就是该select的字段名，值就是对应行的数据值
      // echo"<tr><td>".$row["wenzhang"]."</td><td>".$row["lanmu"]."</td><td>".$row["zuozhe"]."</td><td>".$row["gjz"]."</td><td>".$row["nrty"]."</td><tr>";
      echo "<tr><td>".$row['id']."</td> <td>".$row['lanmu']."</td> <td>".$row['zuozhe']."</td> <td>".$row['gjz']."</td> <td>".$row['nrty']."</td> </tr>";

    }
  var_dump($records);
 
mysqli_close($conn);

?>

	 </table>

	</div> 




</body>
</html>