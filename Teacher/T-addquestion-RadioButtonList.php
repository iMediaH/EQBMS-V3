<div id="g-rightbar">
	<div id="aqRB_head">
        <li>
        <span style="font-size:17px"><span style="color:#0F0">>></span>HTML</span>
        <span style="font-size:17px"><span style="color:#0F0">>></span>添加题目</span></li>
        <li id="aqRB_head_li"><a href="T-index.php"><span style="font-size:14px;color:#0F6;">返回题库</span></a></li>
        <hr>
    </div>
 
    <div id="aqRB_main">
        <form action="T-radiobuttonlist-db.php" method="post">
        <li><span class="aqRB_font">题型:</span><li class="aqRB_input"><select style="height:26px;" id="aqRB_select" name="aqRB_select">
        <option><span style="font-size:18px;">单选题</span></option>
        <option><span style="font-size:18px;">多选题</span></option>
        
        <option><span style="font-size:18px;">简答题</span></option>
        <option><span style="font-size:18px;">判断题</span></option>
        <option><span style="font-size:18px;">自定义</span></option>
        </select></li></li>
        
        <li><span class="aqRB_font">题目:</span><li class="aqRB_input"><textarea  style="width:50%; height:100px;" name="textarea">请入题目内容</textarea></li></li>
        
        <li class="aqRB_RB"><span class="aqRB_font">添加选项:</span>
        <li class="aqRB_input"><input type="text" name="" id="aqRB_in1" value="请入选项内容" style="width:18%; height:26px;"/>
        <i class="icon-plus-sign icon-2x"></i></li>
       <!-- <i class="icon-remove-sign icon-2x"></i>  -->
        </li>
        <li><span class="aqRB_font">参考答案:</span>
        <li class="aqRB_input"><input type="text" name="answer" id="aqRB_in1" style="width:15%; height:26px;" value="请入答案内容"/></li>
        </li>
        <li id="difficult">
        <span class="aqRB_font">难易度:</span>
        <li class="aqRB_input">
     <!--  <i id="c1"> <i class="icon-circle-blank icon-3x" id="circle1"></i><span style="font-size:16px">简单</span></i>
        <i id="c1"> <i class="icon-circle-blank icon-3x" id="circle2"></i><span style="font-size:16px">一般</span></i>
        <i id="c1"> <i class="icon-circle-blank icon-3x" id="circle3"></i><span style="font-size:16px">困难</span></i> -->
        <i class="icon-circle-blank icon-3x" id="circle1"></i><span style="font-size:16px">简单</span>
        <i class="icon-circle-blank icon-3x" id="circle2"></i><span style="font-size:16px">一般</span>
        <i class="icon-circle-blank icon-3x" id="circle3"></i><span style="font-size:16px">困难</span>
        </li></li>
        <hr>
        
        <li> <input type="submit" value="保存" style="background:#4caf50; color:#FFF; width:50px; border-radius:6px; font-size:16px; height:30px;" id="inSub"/></li>
        </form>
    </div>

</div>

<script>
	$("#g-rightbar #aqRB_main .icon-plus-sign").click(function(e){
		e.preventDefault();
		//alert("GG");
		objUl=$(this).parent();
		objUl.append("<li><input type='text' name='' id='aqRB_in2' style='width:18%; height:26px;'/><i class='icon-remove-sign icon-2x'></i></li>");
		//$(this).remove();
		});
	$(".icon-remove-sign").click(function(e){
		e.preventDefault();
		alert("GG");
		});
	
</script>