$(document).ready(function() {
	// alert('sadasfdddddddddddas');
	$('#checked').click(function(){
		
		var name = $('#username').val();
		var pass = $('#password').val();
		// alert(name);
		// $('#password').addClass('boarder');
		if (name==''&&pass=='') {
			$('#password').addClass('boarder');
			$('#username').addClass('boarder');
			$('#feedback').text('All fields are required');
		}else if(name==''){
			$('#password').removeClass('boarder');
			$('#username').addClass('boarder');
			$('#feedback_name').text('Registration number required');
			$('#feedback_pass').text('');
			$('#feedback').text('');
		}else if(pass==''){
			$('#password').addClass('boarder');
			$('#username').removeClass('boarder');
			$('#feedback_pass').text('Password required');
			$('#feedback_name').text('');
			$('#feedback').text('');
		}
		else{
			$.post('store.php', { name:name ,pass:pass }, function(data){
			$('#feedback').text(data);
			$('#feedback_pass').text('');
			$('#feedback_name').text('');
			var accept = $('#feedback').html();
			var url = 'guild.php';
			if (accept == 'Loading') {
				$(this).html('Loging in please...');
				window.location = url;
			} else {
				$('#password').addClass('boarder');
			}
			
			})
		}
	});
		$('#admin_log').click(function(){
		
		var name_a = $('#username_a').val();
		var pass_a = $('#password_a').val();
		// alert(name);
		$.post('store.php', { name_a:name_a ,pass_a:pass_a }, function(data){
		$('#feedback1').text(data);
		var accept = $('#feedback1').html();
		var url = 'ec.php';
		if (accept == 'Loading') {
			window.location = url;
		}
		})
	});










	$('#passwordsignup').focusin(function(){
		if ($('#passwordsignup').val() === '') {
			$('#feedpassone').text('Atleast 8 characters are needed');
		}
	})
.keyup(function(){
		 if ($('#passwordsignup').val().length == 8||$('#passwordsignup').val().length > 8) {
			$('#feedpassone').text('');
		} else {
			$('#feedpassone').text('Atleast 8 characters are needed');
		}

	});



$('#passwordsignup_confirm').focusin(function(){
		if ($('#passwordsignup_confirm').val() === '') {
			$('#feedpass').text('');
		}
	})
.keyup(function(){
		 if ($('#passwordsignup_confirm').val() == $('#passwordsignup').val()) {
			$('#feedpass').text('');
		 } 
		else {
			$('#feedpass').text('passwords don\'t match');
		}

	}).blur(function(){
		$('#feedpass').text('');
	});


$('#usernamesignup').focusin(function(){
		if ($('#usernamesignup').val() === '') {
			$('#feednameone').text('Write a valid name');
		}
	})
.keyup(function(){
		if ($('#usernamesignup').val() === '') {
			$('#feednameone').text('Write a valid name');
		}else {
			$('#feednameone').text('');
		}

	}).blur(function(){
		$('#feednameone').text('');
	});


$('#usernamesignup2').focusin(function(){
		if ($('#usernamesignup2').val() === '') {
			$('#feedname2').text('Write a valid name');
		}
	})
.keyup(function(){
		if ($('#usernamesignup2').val() === '') {
			$('#feedname2').text('Write a valid name');
		}else {
			$('#feedname2').text('');
		}

	}).blur(function(){
		$('#feedname2').text('');
	});




$('#regsignup').focusin(function(){
	$('#feedreg').text('BU/UP/20__/0000 Or BU/UG/20__/0000');
		// if ($('#regsignup').val() === '') {
		// 	$('#span_p').text('');
		// }
	})
.keyup(function(){
		 if ($('#regsignup').val().length < 12) {
			$('#feedreg').text('Write a valid registration number');
		 } 
		else {
			$('#feedreg').text('');
		}

	}).blur(function(){
		$('#feedreg').text('');
	});


	$('#code').change(function(){
	var code = $('#code').val();
	// $('#p').html(month);
	$('#emailsignup').val(code);
	$('#code').removeClass('boarder');
	});


$('#emailsignup').focusin(function(){
	var code=$('#emailsignup').val();
	if (code=='') {
		$('#feednum').text('Select country code');
		$('#code').addClass('boarder');

	}else if ($('#feednum').val() === code) {
			$('#feednum').text('');
		}
	})
.keyup(function(){
		 if (($('#emailsignup').val().length < 13) || ($('#emailsignup').val().length > 13)){
			$('#feednum').text('Write a valid number');
		 } 
		else {
			$('#feednum').text('');
		}

	}).blur(function(){
		$('#feednum').text('');
	});








	$('#register').click(function(){
		var usernamesignup = $('#usernamesignup').val();
		var usernamesignup2 = $('#usernamesignup2').val();
		var regsignup = $('#regsignup').val();
		var emailsignup = $('#emailsignup').val();
		var passwordsignup = $('#passwordsignup').val();
		var passwordsignup_confirm = $('#passwordsignup_confirm').val();
		var registration = 'admin';
		// alert(usernamesignup2);

		if(usernamesignup==''){
			$('#feednameone').text('First is required');
			$('#usernamesignup').addClass('boarder');
		}else{
			$('#feednameone').text('');
			$('#usernamesignup').removeClass('boarder');
		}
		 if(usernamesignup2==''){
			$('#feedname2').text('Second is required');
			$('#usernamesignup2').addClass('boarder');
		}
		else{
			$('#feedname2').text('');
			$('#usernamesignup2').removeClass('boarder');
		}
		 if(regsignup==''){
			$('#feedreg').text('Put registration number');
			$('#regsignup').addClass('boarder');
		}else{
			$('#feedreg').text('');
			$('#regsignup').removeClass('boarder');
		 }
		  if(emailsignup==''){
			$('#feednum').text('Put phone number');
			$('#emailsignup').addClass('boarder');
		}else if (($('#emailsignup').val().length < 13) || ($('#emailsignup').val().length > 13)){
			$('#feednum').text('Write a valid number');
			$('#emailsignup').addClass('boarder');
		 }else{
			$('#feednum').text('');
			$('#emailsignup').removeClass('boarder');	
		}
		 if(passwordsignup==''){
			$('#feedpassone').text('Put password');
			$('#passwordsignup').addClass('boarder');
		}else{
			$('#feedpassone').text('');
			$('#passwordsignup').removeClass('boarder');
		}
		 if(passwordsignup_confirm==''){
			$('#feedpass').text('Put password');
			$('#passwordsignup_confirm').addClass('boarder');
		}else{
			$('#feedpass').text('');
			$('#passwordsignup_confirm').removeClass('boarder');
		}
		if (passwordsignup==passwordsignup_confirm) {
			 if (usernamesignup!=''&&usernamesignup2!=''&&regsignup!=''&&emailsignup!=''&&passwordsignup!=''&&passwordsignup_confirm!='') {

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
				}else {
					// alert('bjbjkbkbj');
					$('#realtxt').hide();
					$('#tockentxt').show();
					$('#real').hide();
					$('#tockenbdy').show();
					$('#register').hide();
					$('#submit').show();
					
				}
				})
			}
		}else{
			$('#feedpass').text('Put password');
			$('#passwordsignup_confirm').addClass('boarder');
			$('#feedpass').text('passwords don\'t match');
		}

	});
	$('#submit').click(function(){
		var token = $('#tockeninp').val();
		var confirm = 'good';
		$.post('store.php', { confirm:confirm ,token:token }, function(data){
		$('#tockenfeeds').text(data);

		})
	});
});
