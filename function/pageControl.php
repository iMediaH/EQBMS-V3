<?php 
	//回退到原来页面
	function pageChange($info=NULL,$num,$url=NULL){
		//提示， 返回原网页
		if($num==1){
			echo "<script>";
			echo "alert('".$info."');";
			echo "window.history.back();";
			echo "</script>";
		}
		//提示，转到另一页
		else if($num==2){
			echo "<script>";
			echo "alert('".$info."');";
			echo "window.location='".$url."';";
			echo "</script>";
		}
		//直接跳转另一页
		else if($num==3){
			echo "<script>";
			echo "window.location='".$url."';";
			echo "</script>";
		}
	}
	
?>