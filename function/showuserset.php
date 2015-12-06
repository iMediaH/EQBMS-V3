<script src="../assets/js/jquery.js"></script>
<script  type="text/javascript">     
    //显示设置  
	$(document).ready(function(e) {
		//管理员设置
		$("#head #M-user #M-ma2").hover(
			function(){
				$("#set2").slideDown();},
			function(){
				$("#set2").slideUp();}
				);
		$("#head #M-user #M-ma1").hover(
			function(){
				$("#M-user #set1").slideDown();},
			function(){
				$("#M-user #set1").slideUp();}
				);
		//用户设置
		$("#T-user").hover(
			function(){
				$("#T-user #set1").slideDown();},
			function(){
				$("#T-user #set1").slideUp();}
				);
	});  
		
</script>