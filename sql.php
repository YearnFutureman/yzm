<?php 
header("content-type:text/html;charset=utf-8");  //设置编码


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cms";


$conn = mysqli_connect($servername, $username, $password,$dbname);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$a='admin1';
$b='admin1';


 function Useragreed($zh,$mm) {
$sql="SELECT * from `str` WHERE username='$a}' AND password='$b'";
$result=mysql_query($sql);
if(mysql_num_rows($result) == 0){
return false;
}else{
return true;
}
}
if(USeragreed($a,$b)){
echo'登陆成功!';
}else{
echo'登陆失败1';
}







// $sql = "SELECT username, password FROM str";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // 输出数据
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "username: " . $row["username"]. " - password: " . $row["password"]. "<br>";
//     }
// } else {
//     echo "0 结果";
// }
 
mysqli_close($conn);

?>