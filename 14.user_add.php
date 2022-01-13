<?php
#mysqli_connect() 建立資料庫連結
$conn=mysqli_connect("localhost","root","","mydb");
#mysqli_query() 從資料庫查詢資料
#新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
$sql="insert into user(id,pwd) values ('{$POST['id']}',  '{$_POST['pwd']}')";
#echo $sql;
mysqli_query($conn, $sql);
echo "新增資料成功，三秒鐘後回到網頁";
echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
?>