$(document).ready(function(){
	var studentEmail = "";
	var queryUrl = "";
	var realurl= "https://user-api.udacity.com/users?email=lymanwong%40gmail.com";
	$("form").on("submit", function(event){
		studentEmail = ($("form").serialize());
		queryUrl = "https://user-api.udacity.com/users?" + studentEmail;
		event.preventDefault();
		$.support.cors = true;
		$.ajax({
			type: 'GET',
			url: realurl,
			dataType:'JSONP',
			jsonp: false,
			// jsonpCallback: 'apiStatus',
			crossDomain: true,
			contentType: "text/plain",
			headers: {
			    'X-authorization-name': 'dmnd-facebook-ad-manager'
			},
			success: function(response)
			{
				console.log('callback success: ', response);
			},
			error: function(xhr, status, error, response)
			{
				console.log(status + " " + error);
				console.log(xhr);
			}
		});
	});
});