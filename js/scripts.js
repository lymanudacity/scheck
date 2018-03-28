$(document).ready(function(){
	var studentEmail = "";
	var queryUrl = "";
	var realurl= "https://user-api.udacity.com/users?email=lyman%40udacity.com";
	$("form").on("submit", function(event){
		studentEmail = ($("form").serialize());
		queryUrl = "https://user-api.udacity.com/users?" + studentEmail;
		event.preventDefault();
		$.ajax({
			type: 'GET',
			url: realurl,
			dataType:'JSONP',
			jsonp: false,
			// jsonpCallback: 'apiStatus',
			crossDomain: true,
			contentType: "text/plain",
			headers: {
			    'Access-Control-Allow-Origin': 'https://u-schecker.herokuapp.com/'
			},
			success: function(response)
			{
				console.log('callback success: ', response);
			},
			error: function(xhr, status, error)
			{
				console.log(status + " " + error);
			}
		});
	});
});