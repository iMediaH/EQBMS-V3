<!--
	作者：彭均莹
    任务：管理员-题型管理-题型题目分页
    开发时间：2015/11/16 
    修改时间：
-->
<?php
	include("../commonfile/dbconnect.php");
	session_start();
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
	else
		$page = 1;
	$page_size=10;
	$offset=($page-1)*$page_size;
	$sql = "SELECT * from teacherinfo join courseinfo on teacherinfo.teacherid = courseinfo.teacherid join unitinfo on courseinfo.courseid = unitinfo.courseid join singlechoice on singlechoice.unitid = unitinfo.unitid order by questionid Asc limit $offset, $page_size";
	$rs = mysql_query($sql);
	?>
<table id="table1">
    <tr><th width="10px"><input type="checkbox" id="q_all" name="q_all" value=""/></th>
    <th width="8%">编号</th>
    <th width="12%">作者</th>
    <th width="55%">题目简要</th>
    <th colspan="3" width="20%" >操作</th></tr>
    <?php
	while($rows = mysql_fetch_array($rs)){
		?>
        <tr><td><input type="checkbox" id="q" name="check" value=""/></td>
    <?php
		echo "<td>".$rows["QuestionId"]."</td>";
		echo "<td>".$rows["TeacherName"]."</td>";
		echo "<td><div class='quesinfo'>".$rows["Question"]."</div></td>";
		echo "<td><a href='M-ques-viewinfo.php?id=".$rows["QuestionId"]."'><i class='icon icon-eye-open icon-2x'></i></a></td>";
		echo "<td><a href=''><i class='icon icon-pencil icon-2x'></i></a></td>";
		echo "<td><a href='' onclick='del(".$rows["QuestionId"].")'><i class='icon icon-trash icon-2x'></i></a></td></tr>";	
	}
	?>
</table>
<script src="../assets/js/jquery.js"></script>
<script>
$(document).ready(function(e) {
    $("#q_all").click(function(){
		$("#q",this).attr("checked",true);  //只能两个
	});
});
</script>
