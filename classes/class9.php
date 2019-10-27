<!DOCTYPE html>
<html>
<head>
	<title>Dialog</title>
	<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <style type="text/css">
	  	.text{
	color: red;
	font-size: 30px;

}
.bg{background: #ddd}
	  </style>
</head>
<body>

	<script type="text/javascript">
		$(function(){
			$("#dialogmsg").dialog();
		})
	</script>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Append, Prepend </h3>
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">Change</a></li>
			    <li><a id="button2" href="#">Prepend</a></li>
			    <li><a id="button3" href="#">Show Skill</a></li>
			  </ul>
			  <p class="navbar-text">Some text</p>
			</nav>
		
			<div class="para" id="dialogmsg" title="this is my message">
				it is just for test
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
</body>
</html>