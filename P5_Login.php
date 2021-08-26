<?php
$error = false;
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

	$xml = simplexml_load_file("users/test.xml");
	foreach ($xml->userlist->user as $user) {

		if($user->email == $email && $user->password == $password){
			session_start();
			setcookie("ID", $user->ID, time() + 86400, "/");
			setcookie("email", $user->email, time() + 86400, "/");
			setcookie("password", $user->password, time() + 86400, "/");
			setcookie("firstname", $user->firstname, time() + 86400, "/");
			setcookie("lastname", $user->lastname, time() + 86400, "/");
			if ($user->ID == 0){
				header('Location: index.php');
			} else {
				header('Location: index.php');
			}
		}
	  }
	$error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login Page </title>
	<link rel = "stylesheet type" type = "text/css" href= "Login_Page.css" >
</head>
<body>

<?php include('navbar.php'); ?> <!-- navbar --> 

<!-- main item -->
	<div class="login-box">
		<h1 id="intro">Welcome Back</h1>
		<p>Please sign in to enjoy your member benefits</p>
			<form action="" autocomplete="on" method="POST">
				<div>
					<label></label>
					<input type="email" class="test" placeholder= "Email Address" name="email" required>
					<br style="line-height: 50px;">
					<label></label>
					<input type="password" placeholder= "Password" name="password" required>
				</div>
				<?php
           		if($error){
                	echo '<p style="color:red">Invalid username and/or password</p>';
            	}
            	?>
				<div>
					<br>
				    <button type="submit" class="sign-in-button" name="login">Sign in</button>
				</div>
				<br>
			     <label></label>
		      		<input type="checkbox" checked="checked" name="remember"> Remember me
			    <p><a href= "https://www.youtube.com/watch?v=dQw4w9WgXcQ"> Forgot Password? </a></p>
			    <br style="line-height: 20px;">
			    <p> New to Tomas' and friends? <a href= "P6_SignUp.php">Sign up now</a></p>  <!-- sign up page link -->
			</form>
	</div>
<!-- footer -->
<div class="footer">
	<p style="text-align: center;"> Our Info </p>
	<p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
	<p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>
</html>