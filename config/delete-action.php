<?php

// Includs database connection
include "db_connect.php";

$id = $_GET['id']; // rowid from url

// Prepar the deleting query according to rowid
$query = "DELETE FROM actions WHERE rowid=$id";

// Run the query to delete record
if( $db->query($query) ){
	$message = "Action is deleted successfully.";
}else {
	$message = "Sorry, Action is not deleted.";
}

echo $message;
?>
<a href="list-actions.php">Back to List Actions</a>