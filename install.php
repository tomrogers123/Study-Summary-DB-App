<?php

require_once 'includes/dbcon.php';

$set_structure = "CREATE TABLE(
  id INT NOT NULL AUTO_INCRIMENT,
);";
$set_structure .= "CREATE TABLE users(

)"

$db->query($set_structure);