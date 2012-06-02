<?php

require "config.php";
$db = new mysqli( DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT) or die("Could not connect to database." . mysqli_error() );
