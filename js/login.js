$('.btn').click(function () {
	let login = $('.login2').val();
	let pass = $('.pass').val();
	
	$.ajax({
		url: "vendor/finduser.php",
		type: "POST",
		data: ({login: login, pass:pass}),
		dataType: "text",
		beforeSend: funcB,
		success: funcS
	});
});
function funcB(){
	// alert("data proces");
};
function funcS(data) {
	let passer = data;

	if (passer == "no") {
		// alert("не верный логин пароль");
	}else{
		window.location.href = "main.php";
	}
	
}