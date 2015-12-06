<div id="head">
    <div id="home">
        <i class="icon icon-home icon-4x"></i><span id="title">试题库系统</span>
    </div>   
    <div id="search">
        <input type="text" id="search_text" placeholder="请输入搜索关键字"/>
        <a href=""><i class="icon icon-search icon-2x" id=""></i></a>
    </div>
    
    <div id="loginuser">
    请先  <a id="login" href="../login.php">登录</a>
    </div>
    <!--  ***** 教师登录 *****  -->  
    <div id="T-user">
    <i class="icon icon-user icon-2x"></i><span id="userName"><?php /*用户*/ echo $_SESSION["userName"]; ?></span>
    	<div id="set1">
        	<ul>
            <li><a href="../Teacher/T-revise.php">修改信息</a></li>
            <li><a href="../commonfile/loginout.php">退出系统</a></li>
            </ul>
        </div>
    </div>
    <!--  ***** 管理员登录 *****  --> 
    <div id="M-user">
        <div id="M-ma1">
        <i class="icon icon-user icon-2x"></i><span id="userName"><?php /*管理员*/ echo $_SESSION["userName"]; ?></span>
            	<div id="set1">
                <ul>
                <li><a href="../Manager/M-admin-editpwd.php">修改密码</a></li>
                <li><a href="../commonfile/loginout.php">退出系统</a></li>
                </ul>
            </div>
        </div>
        
        <div id="M-ma2">
            <i class="icon icon-cog icon-2x"></i>
            <div id="set2">
                <ul>
                <li><a href="../Manager/M-ques-manage.php">题型管理</a></li>
                <li><a href="../Manager/M-user-manage.php">用户管理</a></li>
            </ul>
        </div>
    </div>
    
</div>
<?php include("../function/showuserset.php"); ?>