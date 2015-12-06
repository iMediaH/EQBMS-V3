<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M-adduser</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>
<link rel="stylesheet" href="../assets/css/public.css"/>
<link rel="stylesheet" href="../assets/css/M-style.css"/>
<script src="../assets/js/bootstrap.min.js"></script>
</head>
<!--
	作者：彭均莹
    任务：管理员-添加用户
    开发时间：2015/11/15 
-->

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
    
    
<!-- ******************** head ********************* -->
<?php include("../commonfile/c-head.php");?>


<!-- ******************** main ********************* -->
<div id="g-bodybox">
    <form action="M-user-add-db.php">
    <div id="M-boxsm">
        <ul>
            <li><label>用户ID：</label> <input class="inputbox" type="text" name="userID"></li>
            <li><label>姓名：</label> <input class="inputbox" type="text" name="userName"></li>
            <li><label>头像：</label> </li>
            <li><label>职称：</label> <select class="inputbox" name="userTitle">
            	<option value="教授">教授</option>
                <option value="副教授">副教授</option>
                <option value="讲师">讲师</option>
                <option value="助教">助教</option></select></li>
            <li><label>联系电话：</label> <input class="inputbox" type="text" name="phone"></li>
            <li><label>E-mail：</label> <input class="inputbox" type="email" name="email"></li>
        </ul>
    </div>
    <div id="clickbtn">
        <input type="submit" class="btn btn-warning" value="保 存">
        <input type="button" class="btn btn-default" onClick="Back();" value="返 回">
    </div>
    </form>
</div>
<!-- ******************** foot ********************* -->
<?php include("../commonfile/c-foot.php");?>
<div class="clear"></div>

<script type="text/javascript">
function Back(){
	event.preventDefault();
	var Q = confirm("是否放弃修改？");
	if(Q){
		window.history.back();
	}
}
</script>


</body>
</html>