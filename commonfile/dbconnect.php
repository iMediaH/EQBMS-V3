<?php
//数据库服务器
$server = "localhost";

//数据库用户
$admin = "root";

//数据库密码
$adminpwd = "";

//数据库名称
$database = "EQBMS";

//连接数据库
$conn = mysql_connect($server,$admin,$adminpwd) or die("Can't connect!");

//设置当前数据库
$db=mysql_select_db($database) or die ("Can't open the database!");

//指定字符集，防止中文乱码
$set = "SET NAMES 'utf8'";

//执行$sql变量的语句
mysql_query($set);

?>