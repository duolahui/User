<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<meta http-equiv="refresh" content="3;URL=http://localhost:8980/ljh/ljh_dl.php" >
<style type="text/css">
<!--
body {
	background-image: url(img/bj.jpg);
}
-->
</style></head>

<body>

<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <?php
if(isset($_POST['Submit'])){
	$empno= $_POST['empno'];
	$pwd=$_POST['password'];
	$name=$_POST['name'];
	$home=$_POST['dizhi'];
	$phone=$_POST['phone'];
	$aihao=$_POST['love'];
	$email=$_POST['email'];
	$conn=mysql_connect("localhost","root","123456");
	mysql_select_db("ljh",$conn);
	$sql="insert into emp(empno,pwd,name,home,phone,aihao,email) values ('$empno','$pwd','$name','$home','$phone','$aihao','$email')";
	mysql_query($sql);
	mysql_close($conn);
	echo "注册成功，3秒后自动跳转登录页面";
	}

?>
  </p>
</div>
</body>
</html>

