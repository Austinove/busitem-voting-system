
$(document).ready(function() {
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

$('#emailsignup').focusin(function(){
	$('#feednum').text('Start with +256');
	$('#emailsignup').val('+2567');
		// if ($('#regsignup').val() === '') {
		// 	$('#span_p').text('');
		// }
	})
.keyup(function(){
		 if ($('#emailsignup').val().length < 13) {
			$('#feednum').text('Write a valid number');
		 } 
		else {
			$('#feednum').text('');
		}

	}).blur(function(){
		$('#feednum').text('');
	});

});