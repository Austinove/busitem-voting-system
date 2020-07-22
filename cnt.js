
	function countDown(secs,elem) {
		var element = document.getElementById(elem);
		element.innerHTML="please wait for"+secs+"seconds";
		if (secs<1) {
			clearTimeout(timer);
			element.innerHTML='<h2>Countdown Complete!</h2>';
			element.innerHTML+='<a href="#"click here to now</a>';
			window.location = "div.php";

		}
		secs--;
		var timer = setTimeout('countDown('+secs+',"'+elem+'")', 1000);
	}