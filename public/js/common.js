$(function(){
	$(window).resize(function(){
		var screenWidth=$(window).width()
		if(screenWidth<700){
			 con=confirm("切手机浏览模式？");
			 if(con==true){
			 	window.location.href="mindex";
			 }
		}
		
	})
})