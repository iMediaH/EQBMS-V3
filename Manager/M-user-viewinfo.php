<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M-viewuserinfo</title>

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
    修改时间：2015/11/16 
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
	$_SESSION["TeacherNum"] = $_GET["TeacherNum"];
	$sql = "select * from teacherinfo where TeacherNum='".$_SESSION["TeacherNum"]."';";
    $rs = mysql_query($sql);
	$rows = mysql_fetch_array($rs);
	echo "<form action='M-user-editinfo.php?TeacherNum=".$_SESSION["TeacherNum"]."'>";
	echo "<div id='M-boxsm'><ul>";
	echo " 
          <li><label>用户ID：</label><span>".$rows["TeacherId"]."</span></li>
          <li><label>姓名：</label><span>".$rows["TeacherName"]."</span></li>
          <li><label>头像：</label><img src='".$rows["TeacherImage"]."' width=90px/></li>
          <li><label>职称：</label><span>".$rows["TeacherTitle"]."</span></li>
          <li><label>联系电话：</label><span>".$rows["TeacherPhone"]."</span></li>
          <li><label>E-mail：</label><span>".$rows["TeacherEmail"]."</span></li>
		  ";
	
	echo "</ul></div>";
	echo "<div id='clickbtn'>";
	echo "<input type='submit' class='btn btn-success' value='修 改'>";
	echo "<input type='button' class='btn btn-default' onClick='Back();' value='返 回'>";
	echo "</div></form></div>";
?>


<!-- ******************** foot ********************* -->
<?php include("../commonfile/c-foot.php");?>
<div class="clear"></div>
<script type="text/javascript">
function Back(){
	window.location = "M-user-manage.php";
}
</script>

</body>
</html>