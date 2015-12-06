<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>usermanagesearch</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>
<link rel="stylesheet" href="../assets/css/public.css"/>
<link rel="stylesheet" href="../assets/css/M-style.css"/>

</head>

<!--
	作者：彭均莹
    任务：管理员-用户管理的搜索
    开发时间：2015/11/17 
    修改时间：2015/11/
-->
<body>
<?php
	include("../commonfile/dbconnect.php");
	include("../function/pageControl.php");
	session_start();
	
	//控制页面 没有登录系统时跳转到登录页
	if(!isset($_SESSION["userName"])){
		pageChange("请先登录系统！",2,"../login.php");
		die();
	}
	?>
<!-- ******************** head ********************* -->
<?php include("../commonfile/c-head.php");?>

<!-- ******************** main ********************* -->

<div id="g-bodybox">
    <div id="M-user_box">
        <div id="M-user_operate">
            <div id="M-user_addbox">
                <i class="icon icon-2x icon-plus-sign" id="M-user_adduser"></i>
            </div>
		<?php	
            $_SESSION["u-searchinfo"] = $_GET["u-searchinfo"];
            echo "<span>搜索'".$_SESSION["u-searchinfo"]."'的结果如下。</span>";
            echo "<div id='M-user_searchbox'>";     	
            echo "<input type='text' name='u-searchinfo' id='search-text' placeholder='请按用户ID或姓名进行搜索' style='font-size:12px;'/>";
            echo "<a href=''><i class='icon icon-search icon-2x' id='searchclick'></i></a>";
            echo "</div>";
            ?>
    	</div>                
	<?php
        $page_size=8;
        $sql = "SELECT * FROM teacherinfo WHERE TeacherId LIKE '%".$_SESSION["u-searchinfo"]."%' or TeacherName LIKE '%".$_SESSION["u-searchinfo"]."%';";
        $rs = mysql_query($sql);
        $num = mysql_num_rows($rs);
    ?>
    
    <!-- ********** 显示所有人员 ********** -->
        <div id="M-user_userbox">
        </div>    
    <!-- ********** 显示分页样式 ********** -->
        <div id="pages">
        <?php  //页面选择	
        if($num>8){
			echo "<ul>";
            for($i=1;$i<=ceil($num/$page_size);$i++){
                echo "<a href='' class='fenye'><li>".$i."</li></a>";
            }
			echo "</ul>";
        }
        ?>
        </div> 
    </div>
</div>

<!-- ******************** foot ********************* -->
<?php include("../commonfile/c-foot.php");?>
<div class="clear"></div>

<script src="../assets/js/jquery.js"></script>
<script>         
$(document).ready(function(e) {
	//点击搜索
	$("#searchclick").click(function(){
		event.preventDefault();
		var usearchinfo = document.getElementById("search-text").value;
		if(usearchinfo==""){
			alert("搜索内容不能为空");
		}
		else
			window.location = "M-user-search.php?u-searchinfo="+usearchinfo+"";
	});
	//添加用户
	$("#M-user_box #M-user_adduser").click(function(){
		window.location = "M-user-add.php";	
	});
	
	//搜索
	<!-- ********** -->
	
	//设置翻页样式
	
	
	
	//翻页变化
	function getPage(pNo){
		$.get("M-user-searchrecords.php",{page:pNo},function(date){
			$("#M-user_userbox").html(date);		
			});
		$("#pages li").eq(pNo-1).addClass("active");  //没有用
	} 
	getPage(1);
	
	$(".fenye").click(function(e){
		e.preventDefault();
		getPage($(this).text());
		
	});
	
	
});
	
	
</script>

</body>

</html>