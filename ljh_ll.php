<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户信息管理系统</title>
<style type="text/css">
<!--
body {
	background-image: url(img/bj.jpg);
}
.STYLE1 {font-size: 18px}
#b1{
	width:100%;
	height:610px;
	}
	#b2{
		width:100%;
		height:35px;
		}
		#b3{
			width:10%;
			height:500px;
			float:left;
			}
		#b4{
			width:80%;
			height:500px;
			float:left;
			background:;
			border-radius:5%;
			}
			#b41{
				width:100%;
				height:55px;
				font-size:36px;
				margin-top:12px;
				}
				#bian{
					width:100%;
					height:1px;
					background:#FFF;
					}
			#b42{
				width:100%;
				height:432px;
				float:left;
				background:;
				}
			#massage{
				margin-top:20px;
				}
			#b43{
				width:80%;
				height:412px;
				float:left;
				background:;
				}
				#b431{
					width:20%;
					height:360px;
					float:left;
					background:;
					}
					#b4311{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:15px;
						}
					#b4312{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}
					#b4313{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}
					#b4314{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}
					#b4315{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}
					#b4316{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}
					#b4317{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}
					/*#b4318{
						width:100%;
						height:40px;
						background:;
						font-size:20px;
						margin-top:10px;
						}*/
					/*#b4319{
						width:100%;
						height:40px;
						background:;
						}*/
				#b432{
					width:80%;
					height:360px;
					float:left;
					background:;
					}
					#b4321{
						width:100%;
						height:40px;
						background:;
						margin-top:12px;
						}
					#b4322{
						width:100%;
						height:40px;
						background:;
						margin-top:10px;
						}
					#b4323{
						width:100%;
						height:40px;
						background:;
						margin-top:10px;
						}
					#b4324{
						width:100%;
						height:40px;
						background:;
						margin-top:10px;
						}
					#b4325{
						width:100%;
						height:40px;
						background:;
						margin-top:10px;
						}
					#b4326{
						width:100%;
						height:40px;
						background:;
						margin-top:10px;
						}
					#b4327{
						width:100%;
						height:40px;
						background:;
						margin-top:10px;
						}
					/*#b4328{
						width:100%;
						height:40px;
						background:;
						}*/
					/*#b4329{
						width:100%;
						height:40px;
						background:;
						}*/
				#b433{
					width:100%;
					height:42px;
					float:left;
					background:;
					margin-top:10px;
					}	
			#b44{
				width:10%;
				height:412px;
				float:left;
				background:;
				}
		#b5{
			width:10%;
			height:500px;
			float:left;
			}
		#b6{
			width:100%;
			height:20px;
			float:left;
			}
		#an{
			width:100%;
			height:30px;
			float:left;
			}
body,td,th {
	color: #FFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="ljh_dl.php">
<div id="b1" align="center">
<div id="b2"></div>
<div id="b3"></div>
<div id="b4" style="box-shadow:0px 0px 15px 2px #FFFFFF;">
<div id="b41"><strong>用户信息管理系统</strong></div>
<div id="bian"></div>
<div id="b42">
<div id="massage" align="center">
    <?php
$mysqli = new MySQLi('localhost','root','123456','ljh');
$sql ="select * from emp";
$result = $mysqli->query($sql);
echo "<table border='1' width='1000'>";
echo "<tr><td>序号</td><td>用户账号</td><td>用户密码</td><td>用户姓名</td><td>用户地址</td><td>联系电话</td><td>个人爱好</td><td>邮箱地址</td><td>管理操作</td></tr>";
while($row=$result->fetch_assoc()){
	echo"<tr>";
	echo"<td>".$row['Id']."</td>";
	echo"<td>".$row['empno']."</td>";
	echo"<td>".$row['pwd']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['home']."</td>";
	echo"<td>".$row['phone']."</td>";
	echo"<td>".$row['aihao']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td> 
	<a href='ljh_xg.php?id=	".$row['Id']."'>修改</a>&nbsp;&nbsp; <a href='ljh_sc.php?id=".$row['Id']."'>删除</a></td>";
	echo"</tr>";
	}
echo "</table>";
$result->free();
$mysqli->close();
?> 
</div>
</div>
</div>
<div id="b5"></div>
<div id="b6"></div>
<div id="an">
<div id="an" class="dl-css">
  <input type="submit" value="点击退出登录" style="width:200px; height:30px" />
</div>
</div>
</div>
</form>
</body>
</html>