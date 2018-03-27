$(document).ready(function(){
	var studentEmail = "";
	var queryUrl = ""
	$("form").on("submit", function(event){
		studentEmail = ($("form").serialize());
		queryUrl = "https://user-api.udacity.com/users?" + studentEmail;
		event.preventDefault();
		// $.ajax({
		// 	url: queryUrl,
		// 	type: 'GET',
		// 	dataType:'JSON',
		// 	jsonp: false,
		// 	jasonpCallback: 'callback',
		// 	crossDomain: true,
		// 	contentType: "text/plain",
		// 	headers: {
		// 	    'Access-Control-Allow-Origin': 'http://localhost:9090'
		// 	},
		// 	success: function(data)
		// 	{
		// 		console.log(data);
		// 	},
		// 	error: function(httpReq, status, exception)
		// 	{
		// 		alert(status + " " + exception);
		// 	}
		// });
		$.ajax({
		    type: "GET",
		    headers: {"X-My-Custom-Header": "some value"},
		    url: queryUrl
		}).done(function (data) {
		    console.log(data);
		});
	});
});