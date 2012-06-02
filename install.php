<?php

require_once 'includes/dbcon.php';

$set_structure = "CREATE TABLE(
  id INT NOT NULL AUTO_INCRIMENT,
  study_title VARCHAR(30) NOT NULL,
  study_authors VARCHAR(50) NOT NULL,
  study_date YEAR NOT NULL,
  aims TEXT NOT NULL
);";
$set_structure .= "CREATE TABLE users(
	id INT NOT NULL AUTO_INCRIMENT
	username VARCHAR(30) NOT NULL,
	password VARCHAR(50) NOT NULL,
)";
$outcome = $db->query($set_structure);

if($outcome != true) echo "stuff for error";