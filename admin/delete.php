<?php

	require_once '../includes/dbcon.php';
	$study = $_GET['id'];
	$result = $db->query("DELETE FROM studies WHERE(id=$study)") or die("Study couldn't be removed from database." . mysql_error());

	if()

?>