<!--  
	作者：彭均莹
    任务：管理员-添加用户 to-db
    开发时间：2015/11/15 
-->
<?php
	header("Content-Type:text/html;charset=utf-8");
	//函数导入
	include("../function/pageControl.php");
	include("../commonfile/dbconnect.php");
	session_start();
	
	//获取表单信息
	
	$userID = $_REQUEST["userID"];
	$userName = $_REQUEST["userName"];
	$userTitle = $_REQUEST["userTitle"];
	$phone = $_REQUEST["phone"];
	$email = $_REQUEST["email"];	

	//表单信息验证
	
	//用户名为空
	if($userID == ""){
		pageChange("用户ID不能为空！",1,"");
		die();
	}
	//姓名不能为空
	else if($userName == ""){
		pageChange("用户姓名不能为空！",1,"");
		die();
	}
	
	//3连接数据库
	$sql1 = "select * from teacherinfo where TeacherId = '".$userID."'";
	$rs=mysql_query($sql1);
	if(mysql_num_rows($rs)>0){
		pageChange("用户ID已存在！",1,"");
		die();
	}

	$sql2 = "INSERT INTO teacherinfo (TeacherId,TeacherName,TeacherTitle,TeacherPhone,TeacherEmail) VALUES ('".$userID."','".$userName."','".$userTitle."','".$phone."', '".$email."');";
	$rs=mysql_query($sql2);
	
	//关闭书数据库
	mysql_close($conn);
			
	//页面跳转到教师功能主页面
	pageChange("成功添加用户！",2,"M-user-manage.php");
	?>       
