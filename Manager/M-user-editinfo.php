<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M-edituserinfo</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>
<link rel="stylesheet" href="../assets/css/public.css"/>
<link rel="stylesheet" href="../assets/css/M-style.css"/>
<script src="../assets/js/bootstrap.min.js"></script>
</head>
<!--
	作者：彭均莹
    任务：管理员-查看用户信息
    开发时间：2015/11/08 
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
<?php 
	$sql = "select * from teacherinfo where TeacherNum='".$_SESSION["TeacherNum"]."';";
    $rs = mysql_query($sql);
	$rows = mysql_fetch_array($rs);
	
	echo "<form action='M-user-editinfo-db.php?TeacherNum=".$_SESSION["TeacherNum"]."'>";
	echo "<div id='M-boxsm'><ul>";
	echo "<li><label>用户ID：</label> <input  disabled='disabled' class='inputbox' type='text' name='userID' value='".$rows["TeacherId"]."'></li>";
	echo "<li><label>姓名：</label> <input class='inputbox' type= 'text' name='userName' value='".$rows["TeacherName"]."''></li>";
	echo "<li><label>密码：</label> <a href='M-user-resetpwd.php?TeacherNum=".$_SESSION["TeacherNum"]."' >重置</a></span></li>";
	echo "<li><label>头像：</label> <img src='".$rows["TeacherImage"]."' width=60px /></li>";
	echo "<li><label>职称：</label> <select class='inputbox' name='userTitle' value='".$rows["TeacherTitle"]."'>
		<option value='教授'>教授</option>
		<option value='副教授'>副教授</option>
		<option value='讲师'>讲师</option>
		<option value='助教'>助教</option>
		</select></li>";
	echo "<li><label>联系电话：</label> <input class='inputbox' type='text' name='phone' value='".$rows["TeacherPhone"]."'></li>";
	echo "<li><label>E-mail：</label> <input class='inputbox' type='email' name='email' value='".$rows["TeacherEmail"]."'></li>";
	echo "</ul></div>";
 ?>   
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