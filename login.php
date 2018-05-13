<?php
header("Content-type: text/html; charset='utf-8'");

	$link=mysql_connect("localhost","root","root");
	if($link)
	{
	  $select=mysql_select_db("login",$link);
	  if($select)
	  {
	    if(isset($_POST["subl"]))
	    {
	      $name=$_POST["usernamel"];
	      $password=$_POST["passwordl"];
	      if($name==""||$password=="")//判断是否为空
	      {
	        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请填写正确的信息！"."\"".")".";"."</script>";
	        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/json/login1.php"."\""."</script>";
	        exit;
	      }
	      $str="select password1 from register where name='".$name."'";
	      mysql_query('SET NAMES UTF8');
	      $result=mysql_query($str,$link);
	      $pass=@mysql_fetch_row($result);
//	      print_r($pass);exit;
	      $pa=$pass[0];
	      if($pa==$password)//判断密码与注册时密码是否一致
	      {
	        echo"登录成功！";
	        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/json/success.php"."\""."</script>";
	      }
	      {  
	        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."登录失败！"."\"".")".";"."</script>";
	        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/json/login1.php"."\""."</script>";
	      }
	    }
	     
	  }
	}
?>