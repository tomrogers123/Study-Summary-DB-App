<?php
  
  session_start();

  require_once 'includes/dbcon.php';

  if ($_POST['submit']) {
  	if (!empty($_POST['username']) && !empty($_POST['password']) ) {
  		$username = mysql_real_escape_string($_POST['username']);
  		$password = mysql_real_escape_string($_POST['password']);
  		$result = $db->query("SELECT * FROM users WHERE username=$username AND password=$password");

  		if ($result->num_rows != 1) {
  			$_GET['e'] = 2;
  		} else {
  			$_SESSION['CORE_LOGGED_IN'] = true;
  			header("Location: index.php")
  		}
  	}
  } else {

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Core Studies Information</title>
	<link rel="stylesheet" type="text/css" href="master.css">
	<meta charset="utf-8">
</head>
<body>

	<?php if (isset($_GET['e'])) {
		echo "<div class='messages'>";
		switch ($_GET['e']) {
			case 1:
		  	echo "You need to log in before adding a study!</p>";
		  break;
		}
		echo "</div>";
	} ?>

	<form action="post" action="login.php">
		
		<div>
			<label for="username">Username:</label>
			<input type="text" id="username" id="username">
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="text" id="username" id="username">
		</div>

		<input type="submit" name="submit" value="Login">
	
	</form>

</body>
</html>
<?php } ?>