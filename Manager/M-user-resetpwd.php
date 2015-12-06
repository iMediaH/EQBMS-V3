<!--
	作者：彭均莹
    任务：管理员-重置用户密码
    开发时间：2015/11/17
    修改时间：
-->

<?php
	header("Content-Type:text/html;charset=utf-8");
	include("../function/pageControl.php");
	include("../commonfile/dbconnect.php");
	
	//修改密码
	
	$sql="update teacherinfo set TeacherPassword ='123456' where TeacherNum=".$_GET["TeacherNum"].";";	
	$rs=mysql_query($sql);
	
	//if(mysql_affected_rows($conn)>0){
	pageChange("重置密码成功，初始密码为123456！",1,"");
	//}
	//else{
	//	pageChange("该密码并未修改，密码为123456！",1,"");
	//}
	//关闭书数据库
	mysql_close($conn);
?>