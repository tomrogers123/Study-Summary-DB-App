<?php

require_once 'includes/dbcon.php';
$study = $_GET['id'];
if (!is_numeric($study)) die("<h1>Something is wrong.</h1>");
$result = $db->query("SELECT * FROM studies WHERE (id =" . $study . "");

$row = $result->fetch_array()

?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $row['study_title'] ?> | Core Studies Information</title>
	<link rel="stylesheet" type="text/css" href="master.css">
	<meta charset="utf-8">
</head>
<body>

	<h1><?php echo $row['study_title'] ?></h1>

	<p>Study Authors: <?php echo $row['study_authors'] ?></p>
	<p>Method: <?php echo $row['method'] ?></p>
	<p>Experimental Design: <?php echo $row['design'] ?></p>
	<p>Timescale: <?php echo $row['type'] ?></p>

	<section id="ethics">

		<h2>Ethics</h2>

	</section> 

	<section id="eval">
		
		<h2>Evaluation</h2>
		<h3>Validity</h3>
		<?php echo $row['validity'] ?>

	</section>

</body>
</html>