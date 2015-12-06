<!--  
	作者：彭均莹
    任务：管理员-修改用户信息 to-db
    开发时间：2015/11/15 
    修改时间：2015/11/16
-->
<?php
	header("Content-Type:text/html;charset=utf-8");
	//函数导入
	include("../function/pageControl.php");
	include("../commonfile/dbconnect.php");
	session_start();
	
	//获取表单信息

	$userName = $_REQUEST["userName"];
	$userTitle = $_REQUEST["userTitle"];
	$phone = $_REQUEST["phone"];
	$email = $_REQUEST["email"];	

	//表单信息验证
	if($userName == ""){
		pageChange("用户姓名不能为空！",1,"");
		die();
	}

	$sql2 = "update teacherinfo set TeacherName='".$userName."',TeacherTitle='".$userTitle."',TeacherPhone='".$phone."',TeacherEmail='".$email."' where TeacherNum = '".$_SESSION["TeacherNum"]."'";
	$rs=mysql_query($sql2);
	
	//关闭书数据库
	mysql_close($conn);
			
	//页面跳转到教师功能主页面
	pageChange("成功修改用户信息！",2,"M-user-manage.php");
	unset($_SESSION["TeacherNum"]);
	?>       
