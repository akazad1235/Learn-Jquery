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
	function getname(){
	echo "Mehedi Hasan";

}
function dept(){
	echo "CSE";

}
function skill(){
	echo "php, java";

}


	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#button1").click(function(){
				$("#name").val("<?php getname() ?>")
			})
			$("#button2").click(function(){
				
				$("#line2").html("<?php dept() ?>")
				
			})
			$("#button3").click(function(){
				$("#line3").text("<?php skill() ?>")
			})
		})
	</script>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">Show Name</a></li>
			    <li><a id="button2" href="#">Show Department</a></li>
			    <li><a id="button3" href="#">Show Skill</a></li>
			  </ul>
			  <p class="navbar-text">Some text</p>
			</nav>

			<div class="container" id="descl">
				<div class="value">
					<input type="text" id="name" name="name" placeholder="your name">
					<p id="line2">Department: </p>
					<p id="line3">Skill: </p>
				</div>
			  <h3>Hi, am a web developer</h3>
			  <p id="line">Use the .navbar-text class to vertical align any elements inside the navbar that are not links (ensures proper padding).</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>