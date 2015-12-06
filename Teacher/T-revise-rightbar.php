<div id="g-rightbar">
    <form action="T-revise-db.php"  method="post">   
    	<li><span style="font-size:17px"><span style="color:#0F0">>></span>修改信息</span></li>
    	<hr>
    	<div id="revise_intro">
            <p><img src="../images/ul.png"/>用户ID :</p> 
            <p><img src="../images/ul.png"/>原密码 :</p> 
            <p><img src="../images/ul.png"/>姓名 :</p> 
            <p><img src="../images/ul.png"/>新密码 :</p> 
            <p><img src="../images/ul.png"/>确认密码 :</p> 
            <p><img src="../images/ul.png"/>职称 :</p> 
            <p><img src="../images/ul.png"/>联系电话 :</p> 
            <p><img src="../images/ul.png"/>E-mail :</p> </div>
            
            <div id="revise_input">
                <p><input type="text" name="TeacherID" class="T-input"/></p> 
                <p><input type="text" name="old_p" class="PWD" id="op"/><i class="icon-ok icon-2x" id="true"  ></i></p> 
                <p><input type="text" name="TeacherName" class="T-input"/></p> 
                <p><input type="text" name="new_p" class="T-input" id="new_P"/></p> 
                <p><input type="text" name="double_new_p" class="T-input" id="new_P_two"/></p> 
                <p> <input type="text" name="title" class="T-input"/></p> 
                <p><input type="text" name="phone" class="T-input"/></p> 
                <p> <input type="text" name="email" class="T-input"/></p>    
            </div>
            <hr>
            <div id="revise_btn">
            <input type="submit" class="btn btn-warning" id="warning" value="保 存">
            <input type="button" class="btn btn-default" id="default" value="返 回">
        </div>
    </form>
</div>

<script>
$("#default").click(function(){
	if(confirm("是否放弃")){
		window.location="../Teacher/T-index.php";
		}
	});
	$("#true").hide();
$(document).ready(function(e) {
    $("#op").keyup(function(){
		var oldpwd=document.getElementById("op").value;
		if(oldpwd=="<?php echo $_SESSION["userPwd"]; ?>")
		$("#true").show();
		});
		
	$("#new_P_two").keyup(function(){
		var newp=document.getElementById("new_P").value;
		var newptwo=document.getElementById("new_P_two").value;
		if(newp==newptwo)
		$("#new_P_two").after("两次密码相同!!!");
		
		});
});

</script>