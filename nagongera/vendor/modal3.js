$(document).ready(function() {
	// alert('working');
	$('#checked').click(function(){
		
		var name = $('#username').val();
		var pass = $('#password').val();
		// alert(name);
		$.post('store.php', { name:name ,pass:pass }, function(data){
		$('#feedback').text(data);
		var accept = $('#feedback').html();
		var url = 'guild.php';
		if (accept == 'Loading') {
			window.location = url;
		}
		})
	});
		$('#admin_log').click(function(){
		
		var name_a = $('#username_a').val();
		var pass_a = $('#password_a').val();
		// alert(name);
		$.post('store.php', { name_a:name_a ,pass_a:pass_a }, function(data){
		$('#feedback').text(data);
		var accept = $('#feedback').html();
		var url = 'ec.php';
		if (accept == 'Loading') {
			window.location = url;
		}
		})
	});
	$('#register').click(function(){
		var usernamesignup = $('#usernamesignup').val();
		var usernamesignup2 = $('#usernamesignup2').val();
		var regsignup = $('#regsignup').val();
		var emailsignup = $('#emailsignup').val();
		var passwordsignup = $('#passwordsignup').val();
		var passwordsignup_confirm = $('#passwordsignup_confirm').val();
		var registration = 'true';
		// alert(usernamesignup2);
		$.post('store.php', { registration:registration ,usernamesignup:usernamesignup ,usernamesignup2:usernamesignup2 ,
			regsignup:regsignup ,emailsignup:emailsignup ,
			passwordsignup:passwordsignup ,passwordsignup_confirm:passwordsignup_confirm}, 
			function(data){
		$('#feedbacksignup').hide();
		$('#feedbacksignup').text(data);
		var accept1 = $('#feedbacksignup').html();
		if (accept1=='Your name is required') {
			$('#feedname').show();
			$('#feedname').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedreg').html('');
			$('#feedreg').hide();
			$('#feednum').html('');
			$('#feednum').hide();
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Your name is required') {
			$('#feedname2').show();
			$('#feedname2').html(accept1);
			$('#feedname').html('');
			$('#feedname').hide();
			$('#feedreg').html('');
			$('#feedreg').hide();
			$('#feednum').html('');
			$('#feednum').hide();
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Registration number is required') {
			$('#feedreg').show();
			$('#feedreg').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Phone number is required') {
			$('#feednum').show();
			$('#feednum').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Password is required') {
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').show();
			$('#feedpass').html(accept1);
		} else if (accept1=="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'") {
			$('#feedreg').show();
			$('#feedreg').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		}
		
		if (accept1 == 'Loading...') {
			// alert('bjbjkbkbj');
			$('#realtxt').hide();
			$('#tockentxt').show();
			$('#real').hide();
			$('#tockenbdy').show();
			$('#register').hide();
			$('#submit').show();
			
		}
		})
	});



	$('#admin').click(function(){
		var usernamesignup = $('#usernamesignup').val();
		var usernamesignup2 = $('#usernamesignup2').val();
		var regsignup = $('#regsignup').val();
		// var emailsignup = $('#emailsignup').val();
		var passwordsignup = $('#passwordsignup').val();
		var passwordsignup_confirm = $('#passwordsignup_confirm').val();
		var admin = 'true';
		// alert(usernamesignup2);
		$.post('store.php', { admin:admin ,usernamesignup:usernamesignup ,usernamesignup2:usernamesignup2 ,
			regsignup:regsignup ,passwordsignup:passwordsignup ,passwordsignup_confirm:passwordsignup_confirm}, 
			function(data){
		$('#feedbacksignup').hide();
		$('#feedbacksignup').text(data);
		var accept1 = $('#feedbacksignup').html();
		if (accept1=='Your name is required') {
			$('#feedname').show();
			$('#feedname').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedreg').html('');
			$('#feedreg').hide();
			$('#feednum').html('');
			$('#feednum').hide();
			$('#feedpass').hide();
			$('#feedpass').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Your name is required') {
			$('#feedname2').show();
			$('#feedname2').html(accept1);
			$('#feedname').html('');
			$('#feedname').hide();
			$('#feedreg').html('');
			$('#feedreg').hide();
			$('#feednum').html('');
			$('#feednum').hide();
			$('#feedpass').hide();
			$('#feedpass').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Registration number is required') {
			$('#feedreg').show();
			$('#feedreg').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Phone number is required') {
			$('#feednum').show();
			$('#feednum').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Password is required') {
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').show();
			$('#feedpass').html(accept1);
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'") {
			$('#feedreg').show();
			$('#feedreg').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		}
		
		if (accept1 == 'Your Registered') {
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
			$('#feedpass').show();
			$('#feedpass').html(accept1);
		}
		})
	});

});
