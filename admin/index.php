<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin | Core Studies Information</title>
	<link rel="stylesheet" type="text/css" href="../css/master.css">
	<meta charset="utf-8">
</head>
<body>
	
	<?php if(isset($_GET['e'])) {

		switch (ß ) {
			case 'value':
				# code...
				break;
			
			default:
				# code...
				break;
		}

	} ?>

	<?php if ($result->num_rows != 0 ) { ?>
  
	<table>
		<thead>
			<th>Study Title</th>
			<th>Edit</th>
			<th>Delete</th>
		</head>
		<tbody>
	    <?php while($row = $result->fetch_array()) {
	  	echo "<tr>";
	  	echo "<td><a href='study.php?id=" . $row['id'] . "'>" . $row['study_title'] . "</a></td>";
		  echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
		  echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
		  echo "</tr>";
	    }
	   } ?>
		</tbody>
	</table>
	<?php } else { ?>
		<a href="add.php">Add a Study</a>
	<?php } ?>
</body>
</html>