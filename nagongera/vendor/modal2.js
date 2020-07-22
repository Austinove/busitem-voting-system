$(document).ready(function() {
	// var guild=" ";
	// var name1 =0;
	$('#show_guild').addClass('font');
	$('#show_guild').html('guild wasn\'t voted');

	$('#show_rcc').addClass('font');
	$('#show_rcc').html('rcc wasn\'t voted');

	$('#show_male').addClass('font');
	$('#show_male').html('male faculty wasn\'t voted');

	$('#show_female').addClass('font');
	$('#show_female').html('female faculty wasn\'t voted');

	$('#show_spe').addClass('font');
	$('#show_spe').html('speaker wasn\'t voted');

	$('#show_sec').addClass('font');
	$('#show_sec').html('secretary wasn\'t voted');

	$('#show_chair').addClass('font');
	$('#show_chair').html('chairperson wasn\'t voted');




	$('.voteguild1').click(function(){
		$('#show_guild').html('');
		$('#voteguild1').addClass('selected');
	});
	$('.voteguild2').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild3').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild4').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild5').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild6').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild7').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild8').click(function(){
		$('#show_guild').html('');
	});
	$('.voteguild9').click(function(){
		$('#show_guild').html('');
	});




	$('.votercc1').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc2').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc3').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc4').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc5').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc6').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc7').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc8').click(function(){
		$('#show_rcc').html('');
	});
	$('.votercc9').click(function(){
		$('#show_rcc').html('');
	});



	$('.votemale1').click(function(){
		$('#show_male').html('');
	});
	$('.votemale2').click(function(){
		$('#show_male').html('');
	});
	$('.votemale3').click(function(){
		$('#show_male').html('');
	});
	$('.votemale4').click(function(){
		$('#show_male').html('');
	});
	$('.votemale5').click(function(){
		$('#show_male').html('');
	});
	$('.votemale6').click(function(){
		$('#show_male').html('');
	});
	$('.votemale7').click(function(){
		$('#show_male').html('');
	});
	$('.votemale8').click(function(){
		$('#show_male').html('');
	});
	$('.votemale9').click(function(){
		$('#show_male').html('');
	});




	$('.votefemale1').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale2').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale3').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale4').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale5').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale6').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale7').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale8').click(function(){
		$('#show_female').html('');
	});
	$('.votefemale9').click(function(){
		$('#show_female').html('');
	});




	$('.votesec1').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec2').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec3').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec4').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec5').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec6').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec7').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec8').click(function(){
		$('#show_sec').html('');
	});
	$('.votesec9').click(function(){
		$('#show_sec').html('');
	});




	$('.votespe1').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe2').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe3').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe4').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe5').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe6').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe7').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe8').click(function(){
		$('#show_spe').html('');
	});
	$('.votespe9').click(function(){
		$('#show_spe').html('');
	});





	$('.votechair1').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair2').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair3').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair4').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair5').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair6').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair7').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair8').click(function(){
		$('#show_chair').html('');
	});
	$('.votechair9').click(function(){
		$('#show_chair').html('');
	});


	// $('#continue').click(function(){
	// 	var vote = 'yes';
	// 	$.post('store.php', { vote:vote }, function(data){
	// 		// var url = 'guild.php';
	// 		// window.location = url;
	// 	})
	});

});