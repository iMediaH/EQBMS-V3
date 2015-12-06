<!--
	作者：彭均莹
    任务：管理员-删除题目
    开发时间：2015/11/28 
    修改时间：
-->

<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	include("../function/pageControl.php");
	include("../commonfile/dbconnect.php");

	$sql="delete from ".$_SESSION["M-table"]." where QuestionId=".$_GET["id"].";";	
	$rs=mysql_query($sql);
	
	if(mysql_affected_rows($conn)>0){
		pageChange("删除成功",2,"M-ques-manage.php");
	}
	//关闭书数据库
	mysql_close($conn);
		
?>