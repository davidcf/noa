<?php
$message = ""; // initial message 

// Includs database connection
include "db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 
if( isset($_POST['submit_data']) ){

	// Gets the data from post
	$id = $_POST['id'];
	$mandate_1 = $_POST['mandate1'];
	$mandate_2 = $_POST['mandate2'];
        $mandate_3 = $_POST['mandate3'];
        $action = $_POST['action'];
        $answer = $_POST['answer'];

	// Makes query with post data
	$query = "UPDATE actions set mandate1='$mandate_1', mandate2='$mandate_2', mandate3='$mandate_3', action='$action', answer='$answer' WHERE rowid=$id";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connection.php"
	if( $db->exec($query) ){
		$message = "Action is updated successfully.";
	}else{
		$message = "Sorry, Action is not updated.";
	}
}

$id = $_GET['id']; // rowid from url
// Prepar the query to get the row data with rowid
$query = "SELECT rowid, * FROM actions WHERE rowid=$id";
$result = $db->query($query);
$data = $result->fetchArray(); // set the row in $data
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Action</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<tr>
				<td>Mandate 1:</td>
				<td><input name="mandate1" type="text" value="<?php echo $data['mandate1'];?>"></td>
			</tr>
			<tr>
				<td>Mandate 2:</td>
				<td><input name="mandate2" type="text" value="<?php echo $data['mandate2'];?>"></td>
			</tr>
			<tr>
				<td>Mandate 3:</td>
				<td><input name="mandate3" type="text" value="<?php echo $data['mandate3'];?>"></td>
			</tr>
			<tr>
				<td>Action:</td>
				<td><input name="action" type="text" value="<?php echo $data['action'];?>"></td>
			</tr>
			<tr>
				<td>Answer:</td>
				<td><input name="answer" type="text" value="<?php echo $data['answer'];?>"></td>
			</tr>
			<tr>
                            <td><a href="list-actions.php">Back</a></td>
				<td><input name="submit_data" type="submit" value="Update Action"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>