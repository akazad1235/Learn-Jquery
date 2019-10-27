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
				$("#live").attr("href", "http://www.youtube.com");
			})
			
		})
	</script>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Set and get Attributes</h1>
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">Change Value</a></li>
			 
			  </ul>
			  
			</nav>

			<div class="container" id="descl">
				<p><a href="http://www.facebook.com" id="live">facebook.com</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>