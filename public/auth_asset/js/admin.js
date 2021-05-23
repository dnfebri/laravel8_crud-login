$(document).ready(function(){
	var j = jQuery.noConflict();
	j("#login-form").on('submit',function(){

		var username = j("#username").val();
		var password = j("#password").val();

		j.ajax({
			url : 'proses.php',
			type : 'POST',
			data : {username : username,password : password},
			beforeSend : function(){
				j('#submit').html('<img src="../images/btn-ajax-loader.gif"> Peroses ');
			},
			success : function(response){
				res = JSON.parse(response);
				if (res['success'] === true) {
					j('#submit').html('<span class="glyphicon glyphicon-ok"></span> &nbsp; Success');					
					j('#pesan').html('<div class="alert alert-success" role="alert"> Login Success <b>Redirecting.....</b></div>');
					setTimeout(function(){
						window.location.href='home.php';
					},1000);
				}else{
					j('#submit').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Masuk');
					j('#pesan').html('<div class="alert alert-danger" role="alert"><b> <span class="glyphicon glyphicon-info-sign"></span> Login Gagal... </b><br/>Silahkan cek kembali username dan password...</div>');
				}
			},
			error : function(e){
				alert(e.status);
			}
		});
		return false;
	});
	j('#form-login').fadeIn(4000);
});