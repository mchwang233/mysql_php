<?php
 #search.php
 include_once("mode_1.php");//引用处理类文件
  
 $f = new ss();
header("Content-type: text/html; charset=utf-8");
$servername = "localhost";
$username = "name";
$password = "password";


$conn = new mysqli($servername, $username, $password,"name");

if ($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
} 
mysqli_set_charset($conn,'utf8'); 
 $searchs = $_POST['search'];  //传递search框过来的值
 $searchs = trim($searchs);
 #echo $_POST["search"];
 #echo $searchs;
 
if (!$searchs)
{
echo '搜索框不能为空.';
exit;
}

$f->ssuo();
$result = mysqli_query($conn,"SELECT * FROM sql_name  where title like '%$searchs%'");
if (mysqli_num_rows($result) < 1) echo '没有数据';
   
while($row = mysqli_fetch_array($result))
 {
   $f -> div_m($row['title'],$row['url'],$row['t_date']);
  #echo $row['title'] ;
  #echo "<br />";
  }
echo "</body>";
echo "</html>";
mysqli_close($conn);
?>
