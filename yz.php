<?php

header("content-type:text/html;charset=utf-8");  //设置编码

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cms";



/**
 * 获取SQL数据库账号密码
 */
  $name = $_GET['name'];
  $pwd = $_GET['pasr'];
  echo $name;
  echo $pwd;

//验证码
session_start();
$a=$_SESSION['fwyzm'];
$b=$_GET['yhyzm'];



 
// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname);
 
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    //验证内容是否与数据库的记录吻合。
        $sql = "SELECT * FROM str WHERE (username='$name') AND (password='$pwd')";
        //执行上面的sql语句并将结果集赋给result。
        $result = $conn->query($sql);
        //判断结果集的记录数是否大于0
        if ($result->num_rows > 0&&$a==$b) {
          	echo "登陆成功跳转页面";

          	// sleep(3);
 
			// Header("refresh:1;url='admin_msg/admin_index.php'");

            
        } else {
            echo "登陆失败,返回登陆页面,重新登陆";
            // Header("refresh:1;url='1.php'");
        }







mysqli_close($conn);

?>