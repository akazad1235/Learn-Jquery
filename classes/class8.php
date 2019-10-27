<!DOCTYPE html>
<html>
<head>
	<title>Hide Show & Toggle</title>
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
		
			<div class="para">
				<form id="myform" action="" method="post"> 
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="" id="username"></td>
						<td><span id="username_error_msg" style="color:red"></span></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="" id="password"></td>
						<td><span id="password_error_msg" style="color:red"></span></td>
					</tr>
					<tr>
						<td>Again Password</td>
						<td><input type="password" name="" id="re_password"></td>
						<td><span id="re_password_error_msg" style="color:red"></span></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="" id="email" required="1" style="color:red"></td>
						<td><span id="email_error_msg"></span></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit"  value="submit"></td>
					
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
</body>
</html>