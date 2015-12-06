<?php
    header("Content-Type:text/html;charset=utf-8");
	//公共文件导入
	include("dbconnect.php");
	include("../function/pageControl.php");


	//1、获取表单递交的信息
	$userName=$_REQUEST["userName"];
	$userPwd=$_REQUEST["userPwd"];
	$userType=$_REQUEST["userType"];
	
	
	//2、表单信息验证
	if($userName == ""){
		pageChange("账号不能为空！",2,"../login.php");
	}
	else if($userPwd == ""){
		pageChange("密码不能为空！",2,"../login.php");
	}
	
	//教师登录
	if($userType==1)
	{
		//3、数据库操作
		$sql="select * from teacherinfo where TeacherID='".$userName."'";
		$rs=mysql_query($sql);
	
		if(mysql_num_rows($rs)<1)
		{  //没有数据
			pageChange("用户不存在！",1,"");  
		}
		else
		{
			$row = mysql_fetch_array($rs);
			//4、页面输出控制
			if($row["TeacherPassword"]==$userPwd)
			{
				session_start();
				$_SESSION["userName"]=$row["TeacherName"];
				$_SESSION["userID"]=$row["TeacherID"];
				$_SESSION["userType"]=1;
				$_SESSION["userPwd"]=$row["TeacherPassword"];
				pageChange("",3,"../Teacher/T-index.php");
			}
			else
			{
				pageChange("密码不正确！",1,"");
			}
		}
	}
	
	//管理员登录
	if($userType==2)
	{
		//3、数据库操作
		$sql="select * from admininfo where AdminUser='".$userName."'";
		$rs=mysql_query($sql);
	
		if(mysql_num_rows($rs)<1)
		{  //没有数据
			pageChange("管理员不存在！",2,"../login.php");  
		}
		else
		{
			$row = mysql_fetch_array($rs);
			//4、页面输出控制
			if($row["AdminPassword"]==$userPwd)
			{
				session_start();
				$_SESSION["userName"]=$row["AdminUser"];
				$_SESSION["userType"]=2;
				$_SESSION["userPwd"]=$row["AdminPassword"];
				pageChange("",3,"../Manager/M-ques-manage.php");
			}
			else
			{
				pageChange("密码不正确！",2,"../login.php");
			}
		}
	}
	
mysql_close($conn);
?>