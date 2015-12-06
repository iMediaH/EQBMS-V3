<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	session_destroy();
	include("../function/pageControl.php");
	pageChange("退出成功",2,"../login.php");
?>