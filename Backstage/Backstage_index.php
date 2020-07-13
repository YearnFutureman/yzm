<?php 

//获取得到的语句
  $idn = $_GET['idn']; //文章标题:
  $wenzhang = $_GET['wenzhang']; //文章标题:
  $lanmu = $_GET['lanmu']; //栏----目
  $zuozhe = $_GET['zuozhe'];//作----者
  $gjz = $_GET['gjz'];//关 键 字
  $nrty = $_GET['nrty'];//内容提要
  

  echo $wenzhang;
  echo $lanmu;
  echo $zuozhe;
  echo $gjz;
  echo $nrty;








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
 
$sql = "INSERT INTO  artic (id,wenzhang,lanmu,zuozhe,gjz,nrty)VALUES ($idn,$wenzhang, $lanmu, $zuozhe, $gjz, $nrty)";
 
if (mysqli_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
 
mysqli_close($conn);

?>
