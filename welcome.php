<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome - <?php echo $_SESSION['username']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<h3>Hai <?php echo $_SESSION['username']; ?></h3>
		<span style="float: right"><a href="logout.php">Logout</a></span>
	</div>
</div>
</body>
</html>
