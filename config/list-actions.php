<?php

// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM actions";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actions List</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
            <a href="add-action.php">Add New</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>Mandate 1</td>
				<td>Mandate 2</td>
				<td>Mnadate 3</td>
                                <td>Action</td>
                                <td>Answer</td>
                                <td>Options</td>
			</tr>
			<?php while($row = $result->fetchArray()) {?>
			<tr>
				<td><?php echo $row['mandate1'];?></td>
				<td><?php echo $row['mandate2'];?></td>
                                <td><?php echo $row['mandate3'];?></td>
                                <td><?php echo $row['action'];?></td>
                                <td><?php echo $row['answer'];?></td>
                                
				<td>
					<a href="update-action.php?id=<?php echo $row['rowid'];?>">Edit</a> | 
					<a href="delete-action.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure delete action?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>