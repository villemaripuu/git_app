	window.onload = function(){
		(function(){
			
			var date1 = new Date();
			var time = date1.getHours() + ":" + date1.getMinutes() + ":" + date1.getSeconds();
			document.getElementsByTagName('div')[0].innerHTML = "Aeg on :" + time;
			console.log(time);
			console.log(document.getElementByTagName);
			window.setTimeout(arguments.callee, 1000);
		 })();
	}
