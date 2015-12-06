<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M-editpassword</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>
<link rel="stylesheet" href="../assets/css/public.css"/>
<link rel="stylesheet" href="../assets/css/M-style.css"/>
<script src="../assets/js/bootstrap.min.js"></script>
</head>
<!--
	作者：彭均莹
    任务：管理员-修改密码
    开发时间：2015/11/08 
    修改时间：2015/11/15
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
    <form action="../commonfile/pwdchangecheck.php">
    <div id="M-boxsm" class="boxsm">
        <ul>
            <li><label>管理员：</label><?php echo $_SESSION["userName"];?></li>
            <li><label>原密码：</label><input id="oldpwd" name="oldpwd" class="inputbox" type="password" > <i class="icon-remove-sign o-no" style="color:#F00;display:none;"></i><i class="icon-ok-sign o-ok" style="color:#6F0;display:none;"></i></li>
            <li><label>新密码：</label><input id="newpwd" name="newpwd" class="inputbox" type="password"  disabled="disabled"></li>
            <li><label>确认密码：</label><input id="surepwd" name="surepwd" class="inputbox" type="password"  disabled="disabled"> <i class="icon-remove-sign s-no" style="color:#F00;display:none;"></i><i class="icon-ok-sign s-ok" style="color:#6F0;display:none;"></i></li>
        </ul>
    </div>
    
    <div id="clickbtn">
        <input type="submit" class="btn btn-warning" disabled="disabled" id="save" value="保 存">
        <input type="button" class="btn btn-default" onClick="Back();" value="返 回">
    </div>
    </form>
</div>

<!-- ******************** foot ********************* -->
<?php include("../commonfile/c-foot.php");?>
<div class="clear"></div>

<script type="text/javascript">
$(document).ready(function(e) {
	
	//核对原密码 11/15
	$("#oldpwd").keyup(function(){
		var oldpwd=document.getElementById("oldpwd").value;
		if(oldpwd=="<?php echo $_SESSION["userPwd"]; ?>"){
			$(".o-ok").show();
			$(".o-no").hide();
			$("#newpwd,#surepwd").attr("disabled",false);
		}
		else{
			$(".o-no").show();
			$(".o-ok").hide();
			$("#newpwd,#surepwd").attr("disabled",true);
		}
	});
	
	//确认密码  11/15
	$("#surepwd,#newpwd").keyup(function(){
		var newpwd=document.getElementById("newpwd").value;
		var surepwd=document.getElementById("surepwd").value;
		if(newpwd==surepwd){
			$(".s-ok").show();
			$(".s-no").hide();
			$("#save").attr("disabled",false);
		}
		else{
			$(".s-no").show();
			$(".s-ok").hide();
			$("#save").attr("disabled",true);
		}
	});
	
});


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