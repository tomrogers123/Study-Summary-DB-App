<?php

require_once 'includes/dbcon.php';
$result = $db->query("SELECT id,study_name FROM studies");

if($result->num_rows() != 0)
	while($row = $result->fetch_array()) {
		echo '<a href="study.php?id=' . $row['id'] . '">' . $row['study_name'] . '</a>'; 
	}
} else {
  echo "<p>No studies were found.</p>";
}
?>