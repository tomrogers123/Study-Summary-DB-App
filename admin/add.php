<?php 

  session_start();

  if ($_POST['submit']) {

  	require_once '../includes/dbcon.php';
  	
  	$submittedData = array(
  		'study_title' => mysql_real_escape_string($_POST['study_title']),
    	'study_authors' => mysql_real_escape_string($_POST['study_authors']),
  		'study_method' => mysql_real_escape_string($_POST['method']),
  		'study_type' => mysql_real_escape_string($_POST['type']),
  		'experimental_design' => mysql_real_escape_string($_POST['design']),
  		'background' => mysql_real_escape_string($_POST['background']),
  		'theories' => mysql_real_escape_string($_POST['theories']),
  		'procedure' => mysql_real_escape_string($_POST['procedure']),
  		'findings' => mysql_real_escape_string($_POST['findings']),
  		'different_sample' => mysql_real_escape_string($_POST['different_sample']),
  		'strength_weakness_new_sample' => mysql_real_escape_string($_POST['strength_weakness_new_sample']),
  		'impact_of_new_sample' => mysql_real_escape_string($_POST['impact_of_new_sample']),
  		'different_method' => mysql_real_escape_string($_POST['different_method']),
  		'strength_weakness_new_method' => mysql_real_escape_string($_POST['strength_weakness_new_method']),
  		'impact_of_new_method' => mysql_real_escape_string($_POST['impact_of_new_method']),
  		'harm' => mysql_real_escape_string($_POST['harm']),
  		'right_to_withdraw' => mysql_real_escape_string($_POST['right_to_withdraw']),
  		'informed_consent' => mysql_real_escape_string($_POST['informed_consent']),
  		'conclusions' => mysql_real_escape_string($_POST['conclusions']),
  		'method_eval' => mysql_real_escape_string($_POST['method']),
  		'eco_validity' => mysql_real_escape_string($_POST['eco_validity']),
  		'reliability' => mysql_real_escape_string($_POST['reliability']),
  		'validity' => mysql_real_escape_string($_POST['validity']),
    	'perspective' => mysql_real_escape_string($_POST['perspective'])
  	);
    
    $result = $db->query("INSERT INTO studies(study_title,study_authors,study_method,study_type,perspective) VALUES($submittedData['study_title'],$submittedData['study_authors']),$submittedData['study_method']),$submittedData['study_type'],$submittedData['perspective'])");

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

	<div id="main-wrap">

		<a class="site-title" href="../index.php">Core Study Summaries</a>

		<h1>Add Study</h1>

		<form method="post" action="add.php" id="study-creation-form">

			<fieldset>

				<legend>Basic Info</legend>

				<div>
					<label for="study_title">Study Title:</label>
					<input type="text" name="study_title" id="study_title">
				</div>
				
				<div>
					<label for="study_date">Study Date:</label>
					<input type="date" name="study_date" id="study_date" size="4" maxlength="4">
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
						<option>Not Applicable</option>
						<option>Repeated Measures</option>
						<option>Independent Measures</option>
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

				<legend>Background</legend>

				<div>
					<label for="background">Outline events that are background to the study:</label>
					<textarea rows="30" cols="40" name="background" id="background"></textarea>
				</div>

				<div>
					<label for="theories">Relevant Theories:</label>
					<textarea rows="30" cols="40" name="theories" id="theoriesß"></textarea>
				</div>

			</fieldset>

			<fieldset>

				<div>
					<label for="procedure">Procedure:</label>
					<textarea rows="45" cols="60" name="procedure" id="procedure"></textarea>
				</div>

				<table id="variables">
					<thead>
						<th>Description</th>
						<th>Type</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<select>
				  					<option>Independent</option>
				  					<option>Dependent</option>
				  					<option>Confounding</option>
				  				</select>
			  				</div>
			  			</td>
							<td>
								<div>
				  				<label for="type" class="screen-reader-text">Type:</label>
				  				<input type="textß" name="type" />
			  				</div>
			  			</td>
						</tr>
						<tr>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<input type="radio" name="type" value="snapshot">Snapshot</input>
			  				</div>
			  			</td>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<input type="radio" name="type" value="snapshot">Snapshot</input>
			  				</div>
			  			</td>
						</tr>
						<tr>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<input type="radio" name="type" value="snapshot">Snapshot</input>
			  				</div>
			  			</td>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<input type="radio" name="type" value="snapshot">Snapshot</input>
			  				</div>
			  			</td>
						</tr>
						<tr>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<input type="radio" name="type" value="snapshot">Snapshot</input>
			  				</div>
			  			</td>
							<td>
								<div>
				  				<label for="type">Type:</label>
				  				<input type="radio" name="type" value="snapshot">Snapshot</input>
			  				</div>
			  			</td>
						</tr>
					</tbody>
				</table>

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
					<label for="strength_weakness_new_method">One Strength and One Weakness of the New Method:</label>
					<textarea rows="30" cols="40" name="strength_weakness_new_method" id="strength_weakness_new_method"></textarea>
				</div>

				<div>
					<label for="impact_of_new_method">Suggest how the new method could affect results:</label>
					<textarea rows="30" cols="40" name="impact_of_new_method" id="impact_of_new_method"></textarea>
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
					<label for="method">Method:</label>
					<textarea rows="30" cols="40" name="method" id="method"></textarea>
				</div>

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

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="../js/jQuery.stageForm.js"></script>
	<script src="../js/implementation.js"></script>

</body>
</html>
<?php endif ?>