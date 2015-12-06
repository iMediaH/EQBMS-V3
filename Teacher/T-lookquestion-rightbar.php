<div id="g-rightbar">
	<div id="lq_head">
    <li><span style="font-size:17px"><span style="color:#0F0">>></span>查看题目</span></li>
    <li id="lq_head_li"><a href="T-index.php"><span style="font-size:14px;color:#0F6;">返回题库</span></a></li>
    <hr>
    </div>
    
    <?php
    include("../commonfile/dbconnect.php");
	//$id=$_GET["id"];
	$sql="select * from judgment where QuestionId='1'";
	$rs=mysql_query($sql);
	
?>
	<div id="question_show_name">
        <p>课程名称：</p>
        <p>知识单元：</p>
        <p>题型：</p>
        <p>题目：</p>
        <p>参考答案：</p>
        <p>难易度：</p>
	</div>
    
    <div id="question_show" style="width:30%;height:300px;">
        <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
        <p>XXXXXXXXXXXX</p>
    </div>
</div>