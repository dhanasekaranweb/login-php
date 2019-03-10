<?php
session_start();

if(isset($_SESSION['username'])){
	header('location:welcome.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<h2>Login Form</h2>
		</div>
		<hr>
		<div class="col-md-12">
			<form class="login_form" id="login_form" method="post" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="username">				
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
					<button class="btn btn-default effect" name="login" value="Login">Login</button>
				</div>
			</form>
		</div>
		<div class="demo_login">
			<h2>Demo Login</h2>
			<label>username: admin</label><br />
			<label>password: admin</label>
		</div>
	</div>
	
</div>

<script type="text/javascript">
	$(function(){
		var login = $('form.login_form')
		login.ajaxForm({
			dataType:"json",
			url:"http://localhost:3000/web.php?q=login",
			beforeSend: function(){
				login.find('.effect').text('Please Wait...')
			},
			success:function(data){
				if(data.status == 200){
					login.find('.effect').text('Welcome');
					setTimeout(function () {
					window.location.href = data.location;
				}, 1000);
				}else{
					login.find('.effect').text(data.errors);
				}
			}
		})
	})
</script>
</body>
</html>
