<?php
  
  session_start();

  if (isset($_GET['logout']) && isset($_SESSION['CORE_LOGGED_IN'])) {
  	session_destroy();
  	$_GET['e'] = 3;
  }

  if (isset($_POST['submit'])) {
  	if (!empty($_POST['username']) && !empty($_POST['password']) ) {
  		$username = mysql_real_escape_string($_POST['username']);
  		$password = md5(mysql_real_escape_string($_POST['password']));
  		$result = $db->query("SELECT * FROM users WHERE username=$username AND password=$password");

  		if ($result->num_rows != 1) {
  			$_GET['e'] = 2;
  		} else {
  			$_SESSION['CORE_LOGGED_IN'] = true;
  			header("Location: index.php");
  		}

  	}else{
  		header("Location: login.php?e=2");
  	}

  	if($_POST['remember'] == 'on') {

  		setcookie("CStudies_usr", $username, time() + 10000);
  		setcookie("CStudies_pass", $password, time() + 1000);

  	}

  } else {

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Core Studies Information</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<meta charset="utf-8">
</head>
<body id="login">

	<div id="main-wrap">

		<h1 class="site-title"><a href="index.php">Core Study Summaries</a></h1>

		<h2>Log In</h2>

		<?php if (isset($_GET['e'])) {
			echo "<div class='messages'>";
			switch ($_GET['e']) {
				
				case 1:
			  	echo "<p>You need to log in before adding a study!</p>";
			  break;

			  case 2:
			  	echo "<p>Those details were not found</p>";	
			  break;

			  case 3:
			  	echo "<p>You have been successfully logged out.</p>";
			  break;

			}
			echo "</div>";
		} ?>

		<form method="post" action="login.php">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" id="username" id="username" value="<?php $_COOKIE['CStudies_usr'] ?>">
			</div>

			<div>
				<label for="password">Password:</label>
				<input type="password" id="password" id="password" value="<?php $_COOKIE['CStudies_pass'] ?>">
			</div>

			<div>
				<label for="remember">Remember Me</label>
				<input type="checkbox" name="remember" id="remember">
			</div>

			<input type="submit" name="submit" value="Login">
		
		</form>
  
  </div>

</body>
</html>
<?php } ?>