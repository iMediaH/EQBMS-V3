<!--
	作者：彭均莹
    任务：管理员-题型管理-右边框-默认显示单选题
    开发时间：2015/11/24 
    修改时间：2015/11/28
-->
<?php
	include("../commonfile/dbconnect.php");
	$page_size=10;
?>

    <div id="r_head">
        <span style="color:#4caf50">>></span><span style="font-size:18px"> 单选题(全)</span>  
        <div class="icon icon-search icon-3x" id="g-rightbar_s"></div>
    </div>
    <hr>
    <div id="r_body">
    
    </div>

<hr>

<div id=bottom>
	<Button class="btn btn-danger btn-xs" onClick="">删 除</Button>
    <div id="pages">
    <?php  
		$sql="SELECT * from teacherinfo join courseinfo on teacherinfo.teacherid = courseinfo.teacherid join unitinfo on courseinfo.courseid = unitinfo.courseid join singlechoice on singlechoice.unitid = unitinfo.unitid";
		$rs=mysql_query($sql);
		$num = mysql_num_rows($rs);
		//页面选择	
        if($num>10){
			echo "<ul>";
            for($i=1;$i<=ceil($num/$page_size);$i++){
                echo "<a href='' class='fenye'><li>".$i."</li></a> |";
            }
			echo "</ul>";
        }
    ?>
    </div> 
</div>

<script src="../assets/js/jquery.js"></script>
<script>         
	function del(id){
		event.preventDefault();
		var Q = confirm("是否确认删除这则题目？");
		if(Q){
			window.location = "M-ques-delete-db.php?id="+id;
		}
	}
$(document).ready(function(e) {
	//翻页变化
	function getPage(pNo){
		$.get("M-ques-rightbarrecords.php",{page:pNo},function(date){
			$("#r_body").html(date);		
			});
	} 
	getPage(1);
	
	$(".fenye").click(function(e){
		
		e.preventDefault();
		getPage($(this).text());		
	});
	
	
});
	
	
</script>