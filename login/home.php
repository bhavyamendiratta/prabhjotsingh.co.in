<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
</head>
<body>
	<center><h1><br><br>
	<?php
		session_start();
		echo "Hi! ".$_SESSION['log_user'];
	?></h1></center>
	<h3>This is your admin panel.</h3>
	
</body>
</html>