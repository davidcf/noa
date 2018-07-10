<?php
$message = ""; // initial message 
if( isset($_POST['submit_data']) ){

	// Includs database connection
	include "db_connect.php";

	// Gets the data from post
	$mandate_1 = $_POST['mandate1'];
	$mandate_2 = $_POST['mandate2'];
        $mandate_3 = $_POST['mandate3'];
        $action = $_POST['action'];
        $answer = $_POST['answer'];

	// Makes query with post data
	$query = "INSERT INTO actions (mandate1, mandate2, mandate3, action, answer) VALUES ('$mandate_1', '$mandate_2', '$mandate_3','$action','$answer')";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connection.php"
	if( $db->exec($query) ){
		$message = "Action is inserted successfully.";
	}else{
		$message = "Sorry, Action is not inserted.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
                    <form action="add-action.php" method="post">
			<tr>
				<td>Mandate 1:</td>
				<td><input name="mandate1" type="text"></td>
			</tr>
			<tr>
				<td>Mandate 2:</td>
				<td><input name="mandate2" type="text"></td>
			</tr>
			<tr>
				<td>Mandate 3:</td>
				<td><input name="mandate3" type="text"></td>
			</tr>
			<tr>
				<td>Action:</td>
				<td><input name="action" type="text"></td>
			</tr>
			<tr>
				<td>Answer:</td>
				<td><input name="answer" type="text"></td>
			</tr>
			<tr>
				<td><a href="list-actions.php">See Data</a></td>
				<td><input name="submit_data" type="submit" value="Insert Action"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>