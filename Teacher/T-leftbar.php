<div id="g-leftbar" >  
<!-- ********************head index 1************************** -->
	<div class="lefthead">   
    	<span>我的课程</span>
    	<div class="icon-2x icon-plus-sign" ></div>
 
<!-- ********************head index 1************************** -->    

<!-- ********************leftbody************************** -->      
		<ul class="menu-2">
        </ul>
	</div>
<!-- ********************leftbody************************** -->  

</div>
 <script src="../assets/js/jquery.js"></script>
<script>
$(document).ready(function(e) {
	ADD_LI_HTML="<div class='icon-2x icon-plus-sign'></div> <ul class='menu-3'></ul>";
	ADD_LI_HTML_2="<div class='icon-2x icon-remove-sign'></div>"
	// $(".lefthead #my_head").click(function(e){
	// 	e.preventDefault();
	// 	$(this).parent().next().show();
	// 	$(this).parent().next().children().show();
	// 	});	
		
	/*$(".add #ADD").click(function(e){
		e.preventDefault();
		$(this).next().show();
		$(this).next().children().show();
		});*/
		
		//删除操作
		function onRemoveChildClick(e){
			e.preventDefault();
			$(this).parent().remove();
		}  		
		// $("").bind("click",onRemoveChildClick);
		//添加2级菜单
		$("#g-leftbar .lefthead>div").click(function(e){
			e.preventDefault();
			// objUl=$(this).parent().next();
			objUl=$(this).next();

			objUl.append("<li><input type='text' id='adInput' value=''/> </li>");
			$("#adInput").bind("blur",onAdInputBlur);
		});
		
		function onAdInputBlur(e){
			$(this).parent().html($(this).val()+ADD_LI_HTML);
			$(this).remove();
			$("#g-leftbar ul.menu-2 li>div").bind("click",onMenu2Click);
			return false;
		}
		
		//第三级菜单
		function onMenu2Click(e){
			e.preventDefault();
			//alert("GFGGG");
			//调试，可用console.log()输出
			console.log("menu-3");
			objUl=$(this).parent();
			objUl.append("<li><input type='text' id='adInput' value=''/> </li>");
			$("#adInput").bind("blur",onAdInputBlur1);
			//objUl.append("<li><input type='text' name='left' id='delInput' value=''/> <div class='icon-2x icon-remove-sign' id='DEL' ></div></li>");
			
			}
		function onAdInputBlur1(e){
			$(this).parent().html($(this).val()+ADD_LI_HTML_2);
			$(this).remove();
			
			return false;
		}
});
</script>         
    	