<?php
$message = ""; // initial message 
if( isset($_POST['submit_data']) ){

	// Includs database connection
	include "db_connect.php";

	// Gets the data from post
	$option_1 = $_POST['option1'];
	$option_2 = $_POST['option2'];
        $option_3 = $_POST['option3'];
        $action = $_POST['action'];
        $answer = $_POST['answer'];

	// Makes query with post data
	$query = "INSERT INTO actions (option1, option2, option3, action, answer) VALUES ('$option_1', '$option_2', '$option_3','$action','$answer')";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connection.php"
	if( $db->exec($query) ){
		$message = "Data is inserted successfully.";
	}else{
		$message = "Sorry, Data is not inserted.";
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
                    <form action="add.php" method="post">
			<tr>
				<td>Opcion 1:</td>
				<td><input name="option1" type="text"></td>
			</tr>
			<tr>
				<td>Option 2:</td>
				<td><input name="option2" type="text"></td>
			</tr>
			<tr>
				<td>Option 3:</td>
				<td><input name="option3" type="text"></td>
			</tr>
			<tr>
				<td>Accion:</td>
				<td><input name="action" type="text"></td>
			</tr>
			<tr>
				<td>Respuesta:</td>
				<td><input name="answer" type="text"></td>
			</tr>
			<tr>
				<td><a href="list-actions.php">See Data</a></td>
				<td><input name="submit_data" type="submit" value="Insert Data"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>