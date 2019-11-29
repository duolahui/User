<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>删除操作</title>
<meta http-equiv="refresh" content="3;URL=http://localhost:8980/ljh/ljh_ll.php" >
<style type="text/css">
<!--
body {
	background-image: url(img/bj.jpg);
}
-->
</style></head>

<body>

<div align="center">
  <p>&nbsp;  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <?php
$i=$_GET['id'];
$mysqli=new MySQLi('localhost','root','123456','ljh');
$sql="delete from emp where Id=".$i;
$mysqli->query($sql);
$mysqli->close();

$conn=mysql_connect('localhost','root','123456');
mysql_select_db("ljh",$conn);


mysql_query($sql);
mysql_close($conn);

echo "删除成功，3秒后自动跳转用户浏览页面";
?>
  </p>
</div>
</body>
</html>