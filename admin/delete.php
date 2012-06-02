<?php

	require_once '../includes/dbcon.php';
	$study = mysql_real_escape_string($_GET['id']);
	$result = $db->query("DELETE FROM studies WHERE(id=$study)") or die("Study couldn't be removed from database." . mysql_error());

	if($result == TRUE) {
		header("Location: index.php?e=2");
	}else{
		echo "<h1>Item could not be removed!</p>";
	}

?>