<!DOCTYPE html>
<html>
<head>
	<title>Hide Show & Toggle</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#button1").click(function(){
				$("#desc").hide('slow');
				
			})
			$("#button2").click(function(){
				$("#desc").show('slow');
				
			})
			$("#button3").click(function(){
				$("#desc").toggle('slow');
				
			})
		})
	</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">Hide</a></li>
			    <li><a id="button2" href="#">Show</a></li>
			    <li><a id="button3" href="#">Toggle</a></li>
			  </ul>
			  <p class="navbar-text">Some text</p>
			</nav>

			<div class="container" id="desc">
			  <h3>Navbar Text</h3>
			  <p>Use the .navbar-text class to vertical align any elements inside the navbar that are not links (ensures proper padding).</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>