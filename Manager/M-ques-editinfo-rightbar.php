<div id="r_head">
<?php 
	$sql = "SELECT * from teacherinfo join courseinfo on teacherinfo.teacherid = courseinfo.teacherid join unitinfo on courseinfo.courseid = unitinfo.courseid join ".$_SESSION["M-table"]." on ".$_SESSION["M-table"].".unitid = unitinfo.unitid join nanyiduinfo on nanyiduinfo.nanyiduid = ".$_SESSION["M-table"].".nanyidu join typenamemenu2 on typenamemenu2.TypeId = ".$_SESSION["M-table"].".TypeId where QuestionId='".$_SESSION["quesid"]."' ";
	$rs = mysql_query($sql);
	$rows = mysql_fetch_array($rs); 

?>
	<span style="color:#4caf50">>></span><span style="font-size:18px"> <?php echo $rows["TypeName"]; ?> </span><span style="color:#4caf50">>></span><span style="font-size:18px"> 修改题目 </span>
</div>
<hr>
<?php   //单选题
	echo "<form action='' >";
	echo "<div id='ques-viewinfo'>";
	echo "<table id='table2'>";
	echo "<tr><th>教		师：</th><td>".$rows["TeacherName"]."</td></tr>";
	echo "<tr><th>课程名称：</th><td>".$rows["CourseName"]."</td></tr>";
	echo "<tr><th>知识单元：</th><td>".$rows["UnitName"]."</td></tr>";
	echo "<tr><th>题		型：</th><td>".$rows["TypeName"]."</td></tr>";
	echo "<tr><th>题		目：</th><td>".$rows["Question"]."</td></tr>";
	if($_SESSION["M-table"]=="singlechoice"){
    	echo "<tr><th>选		项：</th><td>A.".$rows["Option1"]."&nbsp;&nbsp;&nbsp;&nbsp;B.".$rows["Option2"]."</br>C.".$rows["Option3"]."&nbsp;&nbsp;&nbsp;&nbsp;D.".$rows["Option4"]."</td></tr>";}
	else if($_SESSION["M-table"]=="multiplechoice"){
    	echo "<tr><th>选		项：</th><td>A.".$rows["Option1"]."&nbsp;&nbsp;&nbsp;&nbsp;B.".$rows["Option2"]."</br>C.".$rows["Option3"]."&nbsp;&nbsp;&nbsp;&nbsp;D.".$rows["Option4"]."</td></tr>";}
	
	echo "<tr><th>参考答案：</th><td>".$rows["Answer"]."</td></tr>";
	echo "<tr><th>难易度：</th><td>".$rows["NanyiduName"]."</td></tr>";
	echo "</table></div>";
	echo "<hr>";
	echo "<div id='clickbtn'>";
	echo "<input type='submit' class='btn btn-warning' value='保 存'>";
	echo "<input type='button' class='btn btn-default' onClick='window.history.back();' value='返 回'></div>";
	echo "</form>";
?>
