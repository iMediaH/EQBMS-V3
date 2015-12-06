<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TeacherIndex</title>
<!--
		试题库
        制作者：严骏江
        版本：1.0
       	内容：查看题目页面

-->

<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>
<link rel="stylesheet" href="../assets/css/public.css"/>
<link rel="stylesheet" href="../assets/css/T-style.css"/>

<script src="../assets/js/jquery.js"></script>
</head>

<body>
<?php
	include("../commonfile/dbconnect.php");
	include("../function/pageControl.php");
	session_start();
	
	//控制页面 没有登录系统时跳转到登录页
	if(!isset($_SESSION["userName"])){
		pageChange("请先登录系统！",2,"../login.php");
		die();
	}
	?>
<!-- ******************** head ******************** -->
<?php include("../commonfile/c-head.php");?>

<!-- ******************** main ******************** -->

<div id="g-bodybox">
	<?php include("T-leftbar.php");?>
    
    <?php include("../Teacher/T-addquestion-Multiselect.php");?>
</div>

<!-- ******************** foot ******************** -->
<?php include("../commonfile/c-foot.php");?>
<div class="clr"></div> 
</body>
</html>