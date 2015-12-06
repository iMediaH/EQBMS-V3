<!--  
	作者：彭均莹
    任务：管理员-修改密码
    开发时间：2015/11/15 
-->
<?php
    header("Content-Type:text/html;charset=utf-8");
	//公共文件导入
	include("dbconnect.php");
	include("../function/pageControl.php");
	session_start();


	//获取表单递交的信息
	$oldpwd=$_REQUEST["oldpwd"];
	$newpwd=$_GET["newpwd"];
	$surepwd=$_GET["surepwd"];


	//管理员登录
	if($_SESSION["userType"]==2)
	{
		if($surepwd){
			$sql="UPDATE admininfo SET AdminPassword = '".$surepwd."' WHERE AdminUser = '".$_SESSION["userName"]."' ";
			$rs=mysql_query($sql);
			session_destroy();
			pageChange("密码修改成功，请重新登录！",2,"../login.php");
		}
		
	}
mysql_close($conn);
?>