<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="assets/css/font-awesome.css"/>
<link rel="stylesheet" href="assets/css/public.css"/>
<link rel="stylesheet" href="assets/css/login.css"/>

</head>
<!--
	作者：彭均莹
    任务：登录页界面
    开发时间：2015/11/04
    
-->
<body>
<!-- ******************** head ******************** -->
<?php include("commonfile/l-head.php");?>
    
<!-- ******************** login ******************** -->
<div id="g-bodybox">
    <form action="commonfile/logincheck.php" method="post">
    
    <div id="l-content">
    <img src="images/loginbox.png" />
        <ul>
          <li><label>用户名</label>
          <input type="text" id="inputbox" name="userName" ></li>
          <li><label>密&nbsp;&nbsp;&nbsp;码</label>
          <input type="password" id="inputbox" name="userPwd" ></li>
          <li><label>用户类型</label>
          <input type="radio" name="userType" value="1" checked="true" ><span id="type">教师</span>
          <input type="radio" name="userType" value="2" ><span id="type">管理员</span></li>
          <input type="submit" id="loginBtn" value="登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录">
        </ul>
    </div>    
    </form>     
</div>

<!-- ******************** foot ******************** -->
<?php include("commonfile/c-foot.php");?>
<div class="clear"></div>    
</body>
</html>

