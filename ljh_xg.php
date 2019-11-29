<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户个人信息修改</title>
<style type="text/css">
<!--
body {
	background-image: url(img/bj.jpg);
}
.STYLE3 {
	font-weight: bold;
	font-size: 18px;
}
.STYLE4 {font-size: 18px}
#b1{
	width:100%;
	height:610px;
	}
	#b2{
		width:100%;
		height:50px;
		}
		#b3{
			width:15%;
			height:480px;
			float:left;
			}
		#b4{
			width:70%;
			height:480px;
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
				width:10%;
				height:412px;
				float:left;
				background:;
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
					width:55%;
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
					width:50%;
					height:30px;
					float:left;
					background:;
					margin-top:5px;
					}
					#b4331{
					width:5%;
					height:30px;
					float:left;
					background:;
					margin-top:5px;
					}
				#b434{
					width:25%;
					height:30px;
					float:left;
					background:;
					margin-top:5px;
					}	
			#b44{
				width:10%;
				height:412px;
				float:left;
				background:;
				}
		#b5{
			width:%;
			height:530px;
			float:left;
			}
body,td,th {
	color: #FFF;
}
-->
</style></head>

<body>
<div align="center" class="STYLE4">
    <?php
$id=$_GET['id'];
$conn =mysql_connect("localhost","root","123456");
mysql_select_db("ljh",$conn);
$sql="select * from emp where Id=".$id;
$result = mysql_query($sql);
$row=mysql_fetch_array($result);
?>
  </strong></p>
</div>
<form id="form1" name="form1" method="post" action="ljh_xgtz.php">
<div id="b1" align="center">
<div id="b2"></div>
<div id="b3"></div>
<div id="b4" style="box-shadow:0px 0px 15px 2px #FFFFFF;">
<div id="b41"><strong>用户信息修改</strong></div>
<div id="bian"></div>
<div id="b42"></div>
<div id="b43">
<div id="b431">
<div id="b4311" align="center"><strong>修改账号:</strong></div>
<div id="b4312" align="center"><strong>修改密码:</strong></div>
<div id="b4313" align="center"><strong>修改姓名:</strong></div>
<div id="b4314" align="center"><strong>修改地址:</strong></div>
<div id="b4315" align="center"><strong>联系电话:</strong></div>
<div id="b4316" align="center"><strong>修改爱好:</strong></div>
<div id="b4317" align="center"><strong> E-mail :</strong></div>
<!--<div id="b4318" align="center"><strong>登录账号:</strong></div>
<div id="b4319"></div>-->
</div>
<div id="b432">
<input type="hidden" name="hiddenField" id="hiddenField" value="<?=$row['Id']; ?>"/>
<div id="b4321"><input type="text" size="75" name="empno" placeholder="请输入个人账号" style="height:30px;" id="empno" value="<?=$row['empno']; ?>" /></div>
<div id="b4322"><input type="text" size="75" name="password" placeholder="请输入账号密码" style="height:30px;" id="password" value="<?=$row['pwd']; ?>" /></div>
<div id="b4323"><input type="text" size="75" name="name" placeholder="请填写用户姓名" style="height:30px;" id="name" value="<?=$row['name']; ?>" /></div>
<div id="b4324"><input type="text" size="75" name="dizhi" placeholder="请填写用户地址" style="height:30px;" id="dizhi" value="<?=$row['home']; ?>" /></div>
<div id="b4325"><input type="text" size="75" name="phone" placeholder="请输入联系电话" style="height:30px;" id="phone" value="<?=$row['phone']; ?>" /></div>
<div id="b4326"><input type="text" size="75" name="love" placeholder="请填写个人爱好" style="height:30px;" id="love" value="<?=$row['aihao']; ?>" /></div>
<div id="b4327"><input type="text" size="75" name="email" placeholder="请输入邮箱账号" style="height:30px;" id="email" value="<?=$row['email']; ?>" /></div>
<!--<div id="b4328"><input type="text" size="75" style="height:30px;" /></div>
<div id="b4329"></div>-->
</div>

<div id="b433" align="right">
<input type="submit" name="Submit" value="确定修改" class="STYLE1" style="width:180px; height:30px" />
</div>
</form>
<div id="b4331"></div>
<div id="b434" align="right">
<form action="ljh_ll.php">
<input type="submit" value="取消修改" class="STYLE1" style="width:180px; height:30px;" />
</form>
</div>

</body>
</html>
