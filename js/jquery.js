$(document).ready(function(){

		$("#username_error_msg").hide();
		$("#password_error_msg").hide();
		$("#re_password_error_msg").hide();
		$("#email_error_msg").hide();

		var error_username=false;
		var error_password=false;
		var error_password_again=false;
		var error_email=false;
		$("#username").focusout(function(){
			check_user();
		})
		$("#password").focusout(function(){
			check_password();
		})
		$("#re_password").focusout(function(){
			check_value_password();
		})
			function check_user(){
				var username_length=$("#username").val().length;
				if (username_length < 5 || username_length >50) {
					$("#username_error_msg").html("should be between 5-20 charecter");
					$("#username_error_msg").show();
					error_username=true;
				}else{
					$("#username_error_msg").hide();
				}
			}
			function check_password(){
				var password_length=$("#password").val().length;
				if (password_length < 5) {
					$("#password_error_msg").html("should be between min 8 charecter");
					$("#password_error_msg").show();
					error_password=true;
				}else{
					$("#password_error_msg").hide();
				}
			}
			function check_value_password(){
				var password_length=$("#password").val();
				var again_password=$("#re_password").val();
				if (password_length != again_password) {
					$("#re_password_error_msg").html("Your pasword is not match!");
					$("#re_password_error_msg").show();
					error_password_again=true;
				}else{
					$("#re_password_error_msg").hide();
				}
			}

			$("#myform").submit(function(){

			var error_username=false;
			var error_password=false;
			var error_password_again=false;
			var error_email=false;
			if (error_username==false && error_password== false && error_password_again==false) {
				return true;
			}else{
				return false;
			}
				
			})
			
			
		})