


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
     while( $record = mysqli_fetch_array($result )){
        //mysql_fetch_array()函数的作用类似foreach对数组的作用：遍历（结果集）
        //它每次去的结果集的“一行数据”，并“装入”到数组 $record 中
        //该数组的下标就是该select的字段名，值就是对应行的数据值
       $records[]=$record;
    }
  var_dump($records);
 
mysqli_close($conn);

?>
