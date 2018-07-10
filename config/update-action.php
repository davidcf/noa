<?php
$message = ""; // initial message 

// Includs database connection
include "db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 
if( isset($_POST['submit_data']) ){

	// Gets the data from post
	$id = $_POST['id'];
	$option_1 = $_POST['option1'];
	$option_2 = $_POST['option2'];
        $option_3 = $_POST['option3'];
        $action = $_POST['action'];
        $answer = $_POST['answer'];

	// Makes query with post data
	$query = "UPDATE actions set option1='$option_1', option2='$option_2', option3='$option_3', action='$action', answer='$answer' WHERE rowid=$id";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connection.php"
	if( $db->exec($query) ){
		$message = "Data is updated successfully.";
	}else{
		$message = "Sorry, Data is not updated.";
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
	<title>Update Data</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<tr>
				<td>Opcion 1:</td>
				<td><input name="option1" type="text" value="<?php echo $data['option1'];?>"></td>
			</tr>
			<tr>
				<td>Opcion 2:</td>
				<td><input name="option2" type="text" value="<?php echo $data['option2'];?>"></td>
			</tr>
			<tr>
				<td>Opcion 3:</td>
				<td><input name="option3" type="text" value="<?php echo $data['option3'];?>"></td>
			</tr>
			<tr>
				<td>Accion:</td>
				<td><input name="action" type="text" value="<?php echo $data['action'];?>"></td>
			</tr>
			<tr>
				<td>Respuesta:</td>
				<td><input name="answer" type="text" value="<?php echo $data['answer'];?>"></td>
			</tr>
			<tr>
                            <td><a href="list-actions.php">Back</a></td>
				<td><input name="submit_data" type="submit" value="Update Data"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>