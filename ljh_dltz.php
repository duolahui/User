<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��¼ʧ��</title>
<style type="text/css">
<!--
body {
	background-image: url(img/bj.jpg);
}
-->
</style></head>

<body>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <p>
    <?php
if(isset($_POST['Submit'])){
$mysqliObj = new mysqli("localhost","root","123456","ljh"); 
$result = $mysqliObj->query("SELECT * FROM emp where empno ='$_POST[empno]'and   pwd ='$_POST[password]'"); 
$rows = $mysqliObj->affected_rows; 
if($rows>=1)
{
 Header("Location:ljh_ll.php");
}
else
{
 echo"����������������������룡";
}
$mysqliObj->close();
}
if(isset($_POST['Submit2'])){
Header("Location:ljh_zc.php");

}
?>
</p>
  <div class="dldz-css">
  <form action="ljh_dl.php" method="post">
  <input type="submit" value="������ص�½����" />
  </form>
  </div>
</div>
</body>
</html>