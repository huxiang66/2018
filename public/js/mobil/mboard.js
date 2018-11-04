$(function(){
	var inputVal=$("input").val();
	$("button").click(function(){
		if($("#userName").val()==""||$("#email").val()==""||$("#phone").val()==""||$("#message").val()==""){
			alert('输入不能为空')
		}
		else{
			alert("提交成功")
			window.location.href="mboard";
		}
	})
		
	
})