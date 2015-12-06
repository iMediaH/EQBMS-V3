<!--
	作者：彭均莹
    任务：管理员-获取数据库中用户 分页
    开发时间：2015/11/16 
    修改时间：
-->
<?php
	include("../commonfile/dbconnect.php");
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
	else
		$page = 1;
	$page_size=8;
	$offset=($page-1)*$page_size;
	
	
	$sql = "select TeacherNum,TeacherId,TeacherName,TeacherImage from teacherinfo limit $offset, $page_size";
	$rs = mysql_query($sql);

	while($rows = mysql_fetch_array($rs)){
		echo "<div id='each'>";
		echo "<div id='mask'>"; 
		echo "<a href='M-user-viewinfo.php?TeacherNum=".$rows["TeacherNum"]."'><i class='icon icon-eye-open' id='view'></i></a>";
		echo "<a href='M-user-delete-db.php' onClick='del(".$rows["TeacherNum"].");'><i class='icon icon-trash' id='delete'></i></a></div>";
		echo "<div id='userinfo-sim'>";
		echo "<img src='".$rows["TeacherImage"]."' />";
		echo "<ul><li>ID:</li>";
		echo "<li>".$rows["TeacherId"]."</li>";
		echo "<li>Name:</li>";
		echo "<li>".$rows["TeacherName"]."</li></ul></div></div>";
	}

?>
<script src="../assets/js/jquery.js"></script>
<script>
function del(id){
	event.preventDefault();
	var Q = confirm("是否确认删除此用户的所有内容？");
	if(Q){
		window.location = "M-user-delete-db.php?TeacherNum="+id;
	}
}
$(document).ready(function(e){
	//遮罩
	$("#M-user_box #M-user_userbox #each").hover(
	function(){
		$("#mask",this).slideDown();},
	function(){
		$("#mask",this).slideUp();}
	
	);
	
});
</script>