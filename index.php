<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	  <meta name="Check the student's enrollment status" content="">
	  <meta name="author" content="Lyman Wong">

	  <link rel="stylesheet" href="css/styles.css">

	  <!--[if lt IE 9]>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
	  <title>Student Checker</title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		     <!--  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> -->
		      <a class="nav-item nav-link" href="#">Disabled</a>
		      <a class="nav-item nav-link" href="#">Disabled</a>
		      <a class="nav-item nav-link disabled" href="#">Disabled</a>
		    </div>
		  </div>
		</nav>

		<form id="theForm">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Enter Email Address</label>
		    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Ex: email@email.com" name="email" required>
		<!--     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>
		  
		  <div class="form-group">
<!-- 		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
		  </div>
		  
		  <div class="form-check">
		  <!--   <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
		  </div>
		  
		  <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>