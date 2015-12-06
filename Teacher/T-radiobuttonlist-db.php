<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	//1、获取表单递交的信息
	$questionType=$_REQUEST["aqRB_select"];
	$question=$_REQUEST["textarea"];
	
	//$option=$REQUEST["option1"];
	$answer=$REQUEST["answer"];
	
	//$type=$REQUEST["type"];
	echo $question;
?>