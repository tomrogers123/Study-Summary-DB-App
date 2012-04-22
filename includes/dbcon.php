<?php

require_once '../config.php';
$db = new Mysqli( DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("Could not connect to database." . mysql_error() );