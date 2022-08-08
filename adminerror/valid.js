
$(document).ready(function(){
	$("#signin").click(function(){
		var user_id = $("#user_id").val();
		var password = $("#password").val();
		
	
		if(user_id == ""){
			$("#msg1").fadeIn();
			return false;
		}else{
			$("#msg1").fadeOut();
		}
		
		if(password == ""){
			$("#msg2").fadeIn();
			return false;
		}else{
			$("#msg2").fadeOut();
		}
			
	});
var mail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
});$(document).ready(function(){
	$("#submit").click(function(){
		var e_mail = $("#e_mail").val();
		if(e_mail == ""){
			$("#msg").fadeIn();
			return false;
		}else{
			$("#msg").fadeOut();
		}
		if(!mail.test(e_mail)){
			$("#ms").fadeIn();
			return false;
		}else{
			$("#ms").fadeOut();
		}
		});
		
});