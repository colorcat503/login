<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>登录界面</title>
	</head>
	<body>
		<form method="post" action="http://localhost:8080/json/login.php">
			账号：
			<input type="text" name="usernamel"><br/><br/> 密码：
			<input type="password" name="passwordl">
			<input type="submit" value="登录" name="subl">
			<a href="http://127.0.0.1:8080/json/register1.php">没有账号，注册</a>
		</form>
	</body>
</html>