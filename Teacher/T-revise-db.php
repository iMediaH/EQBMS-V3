<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	//1、获取表单递交的信息
	
	$TeacherID=$_REQUEST["TeacherID"];
	$OldPwd=$_REQUEST["old_p"];
	$TeacherName=$_REQUEST["TeacherName"];
	//$NewPwd=$_REQUEST["New_p"];
	$CheckPwd=$_REQUEST["double_new_p"];
	$Title=$_REQUEST["title"];
	$Phone=$_REQUEST["phone"];
	$Email=$_REQUEST["email"];
	
	//3、数据库连接
	include("../function/pageControl.php");
	include("../commonfile/dbconnect.php");
	
	//4、数据库访问（查询、插入、更新、删除）
	
	$sql="update teacherinfo set TeacherID='".$TeacherID."' , TeacherPassword='".$CheckPwd."', TeacherTitle='".$Title."'
	, TeacherPhone='".$Phone."' , TeacherEmail='".$Email."' where TeacherName ='".$_SESSION['userName']."' ";
	$rs=mysql_query($sql);
	if($rs){
		pageChange("修改成功",2,"../Teacher/T-revise.php");
	}
	//关闭书数据库
	mysql_close($conn);
?>