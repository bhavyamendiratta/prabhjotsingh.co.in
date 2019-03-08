<?php
	$con=mysqli_connect("localhost","root","","test2");
	$error_msg="";
	session_start();
	if(isset($_POST['log_user'])){
		$log_user =$_POST['log_user'];
		$log_pass  =$_POST['log_pass'];
    	$q="SELECT username,password from user where username='$log_user'; ";
		$q1=mysqli_query($con,$q);
		$row=mysqli_fetch_array($q1);
		if($row['password'] == $log_pass){
      		$_SESSION['log_user'] =$row['username'];
      		header("location:home.php");
		}
		else{
			$error_msg="incorrect email or password";
		}
	}

?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Classic Sign In Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	
	<!-- //title -->
	<!-- content -->
	<br><br><br>
	<div class="sub-main-w3">
		<form action="#" method="post">
			<div class="form-style-agile">
				<label>
					Username
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" name="log_user" type="text" required="">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="log_pass" type="password" required="">
			</div>
			<!-- checkbox -->
			<div id="log_error_msg" class="error_msg"><?php if($error_msg=="incorrect email or password") echo $error_msg; ?></div>
	
			<!-- //switch -->
			<input type="submit" value="Log In">
		</form>
	</div>
	
	<!-- //copyright -->

</body>

</html>