<?php 

  session_start();

  if ($_POST['submit']) {
  	
  	$submittedData = array(
  		'study_title' => mysql_real_escape_string($_POST['study_title']),
    	'study_authors' => mysql_real_escape_string($_POST['study_authors']),
  		'study_method' => mysql_real_escape_string($_POST['method']),
  		'study_type' => mysql_real_escape_string($_POST['type']),
  		'experimental_design' => mysql_real_escape_string($_POST['design']),
  		'proceedure' => mysql_real_escape_string($_POST['proceedure']),
  		'findings' => mysql_real_escape_string($_POST['findings']),
  		'different_sample' -> mysql_real_escape_string($_POST['different_sample']);
  		'strength_weakness_new_sample' -> mysql_real_escape_string($_POST['strength_weakness_new_sample']);
  		'impact_of_new_sample' -> mysql_real_escape_string($_POST['impact_of_new_sample']);
  		'harm' => mysql_real_escape_string($_POST['harm']),
  		'right_to_withdraw' => mysql_real_escape_string()
  		'conclusions' => mysql_real_escape_string($_POST['conclusions']),
  		'eco_validity' => mysql_real_escape_string($_POST['eco_validity']),
  		'reliability' => mysql_real_escape_string($_POST['reliability'])
  		'validity' => mysql_real_escape_string($_POST['validity']);
    	'perspective' => mysql_real_escape_string($_POST['perspective'])
  	);
    
    $result = $db->query("INSERT INTO studies(study_title) VALUES($study_title)");

  }

  if (!isset($_SESSION['CORE_LOGGED_IN']) {
  	header('Location: ../login.php?e=1');
  } else:

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Study | Core Studies Information</title>
	<link rel="stylesheet" type="text/css" href="../css/master.css">
	<meta charset="utf-8">
</head>
<body>

	<h1>Add Study</h1>

	<form action="post" action="add.php">

		<fieldset>

			<legend>Basic Info</legend>

			<div>
				<label for="study_title">Study Title:</label>
				<input type="text" name="study_title" id="study_title">
			</div>
			
			<div>
				<label for="study_date">Study Date:</label>
				<input type="date" name="study_date" id="study_date" size="4">
			</div>

			<div>
				<label for="study_authors">Study Authors:</label>
				<input type="text" name="study_authors" id="study_authors">
			</div>

			<div>
			  <label for="method">Method:</label>
				<select name="method">
					<option>Experiment</option>
					<option>Observation</option>
					<option>Case Study</option>
					<option>Self-Report</option>
				</select>
			</div>

			<div>
				<label for="design">Design:</label>
				<select name="design">
					<option>Repeated Measures</option>
					<option>Independant Measures</option>
					<option>Matched Pairs</option>
				</select>
			</div>

			<div>
			  <label for="type">Type:</label>
			  <input type="radio" name="type" value="snapshot">Snapshot</input>
			  <input type="radio" name="type" value="longitudinal">Longitudinal</input>
		  </div>

		</fieldset>

		<fieldset>

			<div>
				<label for="proceedure">Proceedure:</label>
				<textarea rows="45" cols="60" name="proceedure" id="proceedure"></textarea>
			</div>

			<div>
				<label for="findings">Findings:</label>
				<textarea rows="45" cols="60" name="findings" id="findings"></textarea>
			</div>

			<div>
				<label for="conclusions">Conclusions:</label>
				<textarea rows="45" cols="60" name="conclusions" id="conclusions"></textarea>
			</div>

		</fieldset>

		<fieldset>
			<legend>Possible Changes</legend>

			<div>
				<label for="different_sample">Suggest a Different Sample:</label>
				<textarea rows="30" cols="40" name="different_sample" id="different_sample"></textarea>
			</div>

			<div>
				<label for="strength_weakness_new_sample">One Strength and One Weakness of the New Sample:</label>
				<textarea rows="30" cols="40" name="strength_weakness_new_sample" id="strength_weakness_new_sample"></textarea>
			</div>

			<div>
				<label for="impact_of_new_sample">Suggest how the new sample could affect results:</label>
				<textarea rows="30" cols="40" name="impact_of_new_sample" id="impact_of_new_sample"></textarea>
			</div>

			<div>
				<label for="different_method">Suggest a Different Method:</label>
				<textarea rows="30" cols="40" name="different_method" id="different_method"></textarea>
			</div>

			<div>
				<label for="validity">Validity:</label>
				<textarea rows="30" cols="40" name="validity" id="validity"></textarea>
			</div>

			<div>
				<label for="validity">Validity:</label>
				<textarea rows="30" cols="40" name="validity" id="validity"></textarea>
			</div>
		
		</fieldset>

		<fieldset>

			<legend>Ethics</legend>

			<div>
				<label for="informed_consent">Informed Consent:</label>
				<textarea rows="30" cols="40" name="informed_consent" id="informed_consent"></textarea>
			</div>

			<div>
				<label for="harm">Long-term Harm:</label>
				<textarea rows="30" cols="40" name="harm" id="harm"></textarea>
			</div>

			<div>
				<label for="right_to_withdraw">Right to Withdraw:</label>
				<textarea rows="30" cols="40" name="right_to_withdraw" id="right_to_withdraw"></textarea>
			</div>

		</fieldset>

		<fieldset>
			
			<legend>Evaluation</legend>

			<div>
				<label for="validity">Validity:</label>
				<textarea rows="30" cols="40" name="validity" id="validity"></textarea>
			</div>

			<div>
				<label for="eco_validity">Ecological Validity:</label>
				<textarea rows="30" cols="40" name="eco_validity" id="eco
				_validity"></textarea>
			</div>

			<div>
				<label for="reliability">Reliability:</label>
				<textarea rows="30" cols="40" name="reliability" id="reliability"></textarea>
			</div>

			<div>
				<label for="perspective">Perspective:</label>
				<textarea rows="30" cols="40" name="perspective" id="perspective"></textarea>
			</div>

		</fieldset>

		<input type="submit" name="submit" value="Add">
	
	</form>

</body>
</html>
<?php endif ?>