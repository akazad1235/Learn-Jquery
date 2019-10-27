<!DOCTYPE html>
<html>
<head>
	<title>Tooltip</title>
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
		
			$("#name").tooltip({
				track: true,
				show: { delay:100, effect: "slideDown", duration: 800 },
				hide: { delay:100, effect: "slideUp", duration: 300 },
				 

			})
						
		})
	</script>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Jquery UI Tooltip </h3>
			<nav class="navbar navbar-inverse">
			  <ul class="nav navbar-nav">
			    <li><a id="button1" href="#">Change</a></li>
			    <li><a id="button2" href="#">Prepend</a></li>
			    <li><a id="button3" href="#">Show Skill</a></li>
			  </ul>
			  <p class="navbar-text">Some text</p>
			</nav>
		
			<div class="para">
				<label id="title_name" title="name">Name</label>
				<input type="text" name="" id="name" title="your name will be here ">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
</body>
</html>