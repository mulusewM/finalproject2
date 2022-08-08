var mail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
var text = /^[a-zA-Z_\.\-]+$/;
var text1 = /^[a-zA-Z_\.\-]+$/;
var num = /^[0-9_\.\-]+$/;
var ph = /^[0-9]{3}[0-9]{3}[0-9]{4}$/;
var gp = /([0-9]{1,})\.([0-9]{1,2})/;
$(document).ready(function(){
	$("#send").click(function(){
		var qualification = $("#qualification").val();
		var meddile_name = $("#meddile_name").val();
		var last_name = $("#last_name").val();
		var age = $("#age").val();
		var sex = $("#sex").val();
		var e_mail = $("#e_mail").val();
		var address = $("#address").val();
		var gpa = $("#gpa").val();
		var experience = $("#experience").val();
		var department = $("#department").val();
		var vacancy_id = $("#vacancy_id").val();
		var nationality = $("#nationality").val();
		var phone = $("#phone").val();
		var password = $("#password").val();
		var confirm = $("#confirm").val();
        var profile = $("#profile").val();
	
		if(qualification == ""){
			$("#msg1").fadeIn();
			return false;
		}else{
			$("#msg1").fadeOut();
		}
		if(!text.test(qualification)){
			$("#ms1").fadeIn();
			return false;
		}else{
			$("#ms1").fadeOut();
		}
		if(meddile_name == ""){
			$("#msg2").fadeIn();
			return false;
		}else{
			$("#msg2").fadeOut();
		}if(!text.test(meddile_name)){
			$("#ms2").fadeIn();
			return false;
		}else{
			$("#ms2").fadeOut();
		}if(last_name == ""){
			$("#msg3").fadeIn();
			return false;
		}else{
			$("#msg3").fadeOut();
		}if(!text.test(last_name)){
			$("#ms3").fadeIn();
			return false;
		}else{
			$("#ms3").fadeOut();
		}
		if(age == ""){
			$("#msg4").fadeIn();
			return false;
		}else{
			$("#msg4").fadeOut();
		}if(!num.test(age)){
			$("#ms4").fadeIn();
			return false;
		}else{
			$("#ms4").fadeOut();
		}if(age<18){
			$("#m4").fadeIn();
			return false;
		}else{
			$("#m4").fadeOut();
		}if(age>60){
			$("#mg4").fadeIn();
			return false;
		}else{
			$("#m4").fadeOut();
		}
		if(sex == ""){
			$("#msg5").fadeIn();
			return false;
		}else{
			$("#msg5").fadeOut();
		}
		if(e_mail == "" ){
			$("#msg6").fadeIn();
			return false;
		}else{
			$("#msg6").fadeOut();
		}if(!mail.test(e_mail)){
			$("#ms6").fadeIn();
			return false;
		}else{
			$("#ms6").fadeOut();
		}
		if(address == ""){
			$("#msg7").fadeIn();
			return false;
		}else{
			$("#msg7").fadeOut();
		}if(gpa == ""){
			$("#msg8").fadeIn();
			return false;
		}else{
			$("#msg8").fadeOut();
		}
		if(!gp.test(gpa)||gpa>4){
			$("#ms8").fadeIn();
			return false;
		}else{
			$("#ms8").fadeOut();
		}if(experience == ""){
			$("#msg9").fadeIn();
			return false;
		}else{
			$("#msg9").fadeOut();
		}if(department == ""){
			$("#msg15").fadeIn();
			return false;
		}else{
			$("#msg15").fadeOut();
		}
		if(!text1.test(department)){
			$("#z16").fadeIn();
			return false;
		}else{
			$("#z16").fadeOut();
		}
		
		if(nationality == ""){
			$("#msg10").fadeIn();
			return false;
		}else{
			$("#msg10").fadeOut();
		}
		if(vacancy_id == ""){
			$("#msg17").fadeIn();
			return false;
		}else{
			$("#msg17").fadeOut();
		}if(phone == ""){
			$("#msg11").fadeIn();
			return false;
		}else{
			$("#msg11").fadeOut();
		}
		
		if(!ph.test(phone)){
			$("#ms11").fadeIn();
			return false;
		}else{
			$("#ms11").fadeOut();
		}
		if(password == ""){
			$("#msg12").fadeIn();
			return false;
		}else{
			$("#msg12").fadeOut();
		}if(confirm == ""){
			$("#msg13").fadeIn();
			return false;
		}else{
			$("#msg13").fadeOut();
		}
		if(profile== ""){
			$("#msg14").fadeIn();
			return false;
		}else{
			$("#msg14").fadeOut();
		}
		
	});
	
	
	
	
});