<?php

require_once 'includes/dbcon.php';
$study = $_GET['id'];
if (!is_numeric($study)) die("<h1>Something is wrong.</h1>");
$result = $db->query("SELECT * FROM studies WHERE (id =" . $study . ");");

$row = $result->fetch_array()

?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $row['study_title'] ?> | Core Studies Information</title>
	<link rel="stylesheet" type="text/css" href="master.css">
	<meta charset="utf-8">
</head>
<body>

	<div id="main-wrapper">

		<h1><?php echo $row['study_title'] ?></h1>

		<p>Study Authors: <?php echo $row['study_authors'] ?></p>
		<p>Method: <?php echo $row['method'] ?></p>
		<p>Experimental Design: <?php echo $row['design'] ?></p>
		<p>Timescale: <?php echo $row['type'] ?></p>

		<section id="primary">

			<h3>Procedure</h3>
			<?php echo $row['procedure'] ?>

			<h3>Findings</h3>
			<?php echo $row['findings'] ?>
		
		</section>

		<section id="ethics">

			<h2>Ethics</h2>
			
			<h3>Informed Consent</h3>
			<?php echo $row['informed_consent'] ?>

			<h3>Long-term Harm</h3>
			<?php echo $row['harm'] ?>

			<h3>Right to Withdraw</h3>
			<?php echo $row['right_to_withdraw'] ?>

		</section> 

		<section id="eval">
			
			<h2>Evaluation</h2>
			
			<h3>Validity</h3>
			<?php echo $row['validity'] ?>

			<h3>Ecological Validity</h3>
			<?php echo $row['eco_validity'] ?>

			<h3>Reliability</h3>
			<?php echo $row['reliability'] ?>

			<h3>Perspective</h3>
			<?php echo $row['perspective'] ?>

		</section>
		
	</div>

</body>
</html>