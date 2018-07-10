<?php
$message = "";

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
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://getbootstrap.com/docs/3.3/examples/navbar/#">N.O.A.</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="https://getbootstrap.com/docs/3.3/examples/navbar/">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="https://getbootstrap.com/docs/3.3/examples/navbar-static-top/">Static top</a></li>
              <li><a href="https://getbootstrap.com/docs/3.3/examples/navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Accions</h2>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      </div>
      <div><?php echo $message;?></div>

<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="form-group">
    <label>Mandate 1</label>
    <input class="form-control" name="mandate1" type="text" value="<?php echo $data['mandate1'];?>" required>
    <small id="label1help" class="form-text text-muted">Mandato 1.</small>
  </div>
  <div class="form-group">
    <label>Mandate 2</label>
    <input class="form-control" name="mandate2" type="text" value="<?php echo $data['mandate2'];?>" required="">
    <small id="label2help" class="form-text text-muted">Mandato 2.</small>
  </div>
  <div class="form-group">
    <label for="label3">Mandate 3</label>
    <td><input class="form-control" name="mandate3" type="text" value="<?php echo $data['mandate3'];?>" required>
    <small id="label3help" class="form-text text-muted">Mandato 3.</small>
  </div>
  <div class="form-group">
    <label>Action</label>
    <input class="form-control" name="action" type="text" value="<?php echo $data['action'];?>">
    <small id="label4help" class="form-text text-muted">Mandato 3.</small>
  </div>
  <div class="form-group">
    <label>Answer</label>
    <input class="form-control" name="answer" type="text" value="<?php echo $data['answer'];?>" required>
    <small id="label5help" class="form-text text-muted">answer.</small>
  </div>
  <input class="btn btn-primary" name="submit_data" type="submit" value="Update Action">
</form>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  
</body></html>