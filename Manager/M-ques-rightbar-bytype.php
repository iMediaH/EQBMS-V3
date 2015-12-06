<!--
	作者：彭均莹
    任务：管理员-题型管理-右边框
    开发时间：2015/11/24 
    修改时间：2015/11/28
-->
<?php
	include("../commonfile/dbconnect.php");
	$page_size=10;
	if(isset($_GET["typeid"])){
		$typeid = $_GET["typeid"];
	}
	else{
		$typeid = "1";
	}
	//设置题型名称

	$sql="SELECT * from typenamemenu2 join typenamemenu1 on typenamemenu1.TypeMenuId = typenamemenu2.TypeMenuId where TypeId = ".$typeid."";
	$rs = mysql_query($sql);
	$rows = mysql_fetch_array($rs);
	$_SESSION["M-table"] = $rows["TableName"];
	$_SESSION["typeid"] = $typeid;

?>
<div id="r_head">
    <span style="color:#4caf50">>></span><span style="font-size:18px"> <?php echo $rows["TypeName"]; ?></span>  
    <div class="icon icon-search icon-3x" id="g-rightbar_s"></div>
</div>
<hr>
<div id="r_body">

</div>
<hr>
<div id=bottom>
	<Button class="btn btn-danger btn-xs" onClick="">删 除</Button>
    <div id="pages">
        <?php  //页面选择	
        $sqlnum = "SELECT * from teacherinfo join courseinfo on teacherinfo.teacherid = courseinfo.teacherid join unitinfo on courseinfo.courseid = unitinfo.courseid join ".$_SESSION["M-table"]." on ".$_SESSION["M-table"].".unitid = unitinfo.unitid join typenamemenu2 on typenamemenu2.typeid = ".$_SESSION["M-table"].".typeid where typenamemenu2.typeid ='".$_SESSION["typeid"]."' ";
		$rsnum = mysql_query($sqlnum);
		$num = mysql_num_rows($rsnum);
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
		$.get("M-ques-rightbarrecords-bytype.php",{page:pNo},function(date){
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