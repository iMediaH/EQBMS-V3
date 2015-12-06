<!--
	作者：彭均莹
    任务：管理员-删除用户
    开发时间：2015/11/16 
    修改时间：
-->

<?php
	header("Content-Type:text/html;charset=utf-8");
	include("../function/pageControl.php");
	include("../commonfile/dbconnect.php");
	
	//只实现了在教师表中删除教师
	$sql="delete from teacherinfo where TeacherNum=".$_GET["TeacherNum"].";";	
	$rs=mysql_query($sql);
	
	if(mysql_affected_rows($conn)>0){
		pageChange("删除成功",2,"M-user-manage.php");
	}
	//关闭书数据库
	mysql_close($conn);
		
?>