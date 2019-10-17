<!DOCTYPE html>
<html>
<head>
	<title>Hide Show & Toggle</title>
	<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#button1").click(function(){
				$("#desc").fadeIn('slow');
				
			})
			$("#button2").click(function(){
				//mili second
				$("#desc").fadeOut(100);
				
			})
			$("#button3").click(function(){
				$("#desc").fadeToggle('slow');
				
			})
		})
	</script>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">FadeIn</a></li>
			    <li><a id="button2" href="#">fadeOut</a></li>
			    <li><a id="button3" href="#">fadeToggle</a></li>
			  </ul>
			  <p class="navbar-text">Some text</p>
			</nav>

			<div class="container" id="desc">
			  <h3>Hi, am a web developer</h3>
			  <p>Use the .navbar-text class to vertical align any elements inside the navbar that are not links (ensures proper padding).</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>