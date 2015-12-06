<!--
	作者：彭均莹
    任务：管理员-题型管理-左边框
    开发时间：2015/11/19 
    修改时间：2015/12/06
-->
<?php  
	include("../commonfile/dbconnect.php");
?>
<div class="lefthead">   
    <span>题型管理</span>
</div>
<ul id="M-q-left_nav">
    <?php
	$sqlname = "select * from typenamemenu1";
	$rsname = mysql_query($sqlname);
	while($rowsname=mysql_fetch_array($rsname)){
		echo "<li class='".$rowsname["TableName"]."'><div class='ques-type' id='".$rowsname["TableName"]."'>";
		$sqlnum = "select questionid from teacherinfo join courseinfo on teacherinfo.teacherid = courseinfo.teacherid join unitinfo on courseinfo.courseid = unitinfo.courseid join ".$rowsname["TableName"]." on ".$rowsname["TableName"].".unitid = unitinfo.unitid join typenamemenu2 on typenamemenu2.typeid = ".$rowsname["TableName"].".typeid join typenamemenu1 on typenamemenu2.typemenuid = typenamemenu1.typemenuid where typenamemenu1.typemenuid = ".$rowsname["TypeMenuId"]."";
		$rsnum = mysql_query($sqlnum);
		$counts = mysql_num_rows($rsnum);
		
		echo "<span>".$rowsname["TypeMenu"]."</span><span id='counts'>( ".$counts." )</span>";
		echo "<span id='ques-set'><i class='icon icon-plus-sign add'></i></span></div>";
		echo "<ul class='ques-list'>";
		
		
		$sql = "SELECT * FROM typenamemenu2 where TypeMenuId = ".$rowsname["TypeMenuId"]."";
		$rs = mysql_query($sql);
		while($rows = mysql_fetch_array($rs)){
			echo "<li><a href='M-ques-manage-bytype.php?typeid=".$rows["TypeId"]."' class='type'>".$rows["TypeName"]."</a><i class='icon icon-edit'></i><i class='icon icon-remove-sign'></i><i class='icon icon-ok-sign'></i></li>";
		}
		
		?>
		</ul>
    </li>	
    <?php }	?>	
</ul>
<script src="../assets/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	//add
	$("#M-q-left_nav li i.add").click(function(e){
		e.preventDefault();
		var list = $(this).parent().parent().parent().find("ul");
		//console.log(list.attr("class"));

		list.append("<li><input type='text'/></li>");
		//为动态节点绑定单击事件
		$(".ques-list li input").bind("blur",onAddInputBlur);
		$(".ques-list li input").bind("focus",onAddInputFocus);
	});
		
	function onAddInputBlur(e){
		var list=$(this).parent();
		var table = list.parent().parent();
		var strName=$.trim($(this).val());
		
		console.log(table.attr("class"));
		//console.log(list.attr("class"));
		if(strName.length > 0){
			$(this).remove();
			list.html("<a href='' class='type'>"+strName+"</a><i class='icon icon-edit'></i><i class='icon icon-remove-sign'></i><i class='icon icon-ok-sign'></i>");
		}
		else{
			$(this).val("请先输入");
		}
	}
	
	function onAddInputFocus(e){
		$(this).focus();
	}

	
	
	
	//显示题型添加
    $("#singlechoice").hover(
	function(e){
		$("#singlechoice .icon").show();},
	function(e){
		$("#singlechoice .icon").hide();});
		
	$("#multiplechoice").hover(
	function(e){
		$("#multiplechoice .icon").show();},
	function(e){
		$("#multiplechoice .icon").hide();});
		
	$("#shortanswer").hover(
	function(e){
		$("#shortanswer .icon").show();},
	function(e){
		$("#shortanswer .icon").hide();});
		
	$("#judgment").hover(
	function(e){
		$("#judgment .icon").show();},
	function(e){
		$("#judgment .icon").hide();});
		
	//显示题型编辑按钮
	$(".ques-list").find("li").hover(
	function(e){
		$(".icon-edit",this).show();},
	function(e){
		$(".icon-edit",this).hide();});
		
	//点击编辑题型
	$(".icon-edit").click(
	function(){
		if($(this).next(".icon-ok-sign,.icon-remove-sign").is(":hidden"))
		{
			$(this).next(".icon-remove-sign").show().next(".icon-ok-sign").show();
			//显示输入框
			$(this).parent(".ques-list").children(".type").attr("disabled","false").css("border","1px solid #CCC");
			return false;
			
		}
		else
		{
			$(this).next(".icon-ok-sign").hide().next(".icon-remove-sign").hide();

			return false;
		}
	});
		
		
	//子菜单显示
	$("#g-leftbar ul li").children("ul").hide();
	$("#g-leftbar").find("li:has(ul)").children(".ques-type").click(function(){
		$(this).parent().siblings().children("ul").slideUp("1000");
			$(this).next().slideDown("slow");
			$(this).next().children().slideDown("slow");
	});
	
	
});
</script>