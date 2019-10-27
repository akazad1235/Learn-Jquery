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
	<?php
	function apend(){
	echo "Hosen";

}
function prepend(){
	echo " CSE";

}
function skill(){
	echo "php, java";

}


	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#button1").click(function(){
				$(".append").append(" <?php apend()?>")
			})
			$("#button2").click(function(){
				
				$(".prepend ").prepend(" <?php prepend()?>")
				
			})
			$("#button3").click(function(){
				$("#line3").text("<?php skill() ?>")
			})
		})
	</script>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Append, Prepend </h3>
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">Append</a></li>
			    <li><a id="button2" href="#">Prepend</a></li>
			    <li><a id="button3" href="#">Show Skill</a></li>
			  </ul>
			  <p class="navbar-text">Some text</p>
			</nav>

			<div class="container" id="append">
				
					<p class="append">Md. Azad</p>
					<p class="prepend">Md. Azad</p>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>