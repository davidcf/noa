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
		$message = '<div class="alert alert-success"><strong>Info!</strong> Action is updated successfully.</div>';
	}else{
		$message = '<div class="alert alert-danger"><strong>Danger!</strong> Sorry, Action is not updated.</div>';
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
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>NOA - Configurations</title>
        <link rel='stylesheet' href='../css/bootstrap.min.css'>
        <link rel='stylesheet' href='../css/styles.css'>
    </head>
    <body>

        <div class='wrapper'>
            <!-- Sidebar Holder -->
            <nav id='sidebar'>
                <div class='sidebar-header'>
                    <h2 class="noa-code">NOA - Project</h2>
                <ul id="menu" class="list-unstyled components">
                    <li><a href="home.html"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="noa-config.php"><i class="glyphicon glyphicon-list-alt"></i>Configurations</a></li>
                    <li><a href="list-actions.php"><i class="glyphicon glyphicon-tasks"></i>Actions</a></li>
                    <li><a href="license.php"><i class="glyphicon glyphicon-copyright-mark"></i>License</a></li>
                    <li><a href='#myModal' data-toggle='modal'><i class="glyphicon glyphicon-briefcase"></i>Info</a></li>
                </ul>
                    
                </div>

            </nav>
            <!-- Page Content Holder -->
            <div id='content'>
                <div class="jumbotron">
                    <h2 class="noa">NOA - Configurations</h2>
                    <small class="noa-small">Multi-Platform Voice Assistant</small>
                </div>            

                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul  class='nav navbar-nav navbar-right'>
                        <a class="btn btn-success btn-sm" href="list-actions.php" role="button">Back to list of actions</a>
                    </ul>
                </div>
                <h3>Edit actions</h3>
                <hr />

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
            <input class="form-control" name="mandate2" type="text" value="<?php echo $data['mandate2'];?>" required>
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

            </div>

        </div>
        <!--Footer-->
        <footer class="container-fluid bg-4 text-center">

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    <p></p>
                    <smal> © 2018 NOA - Project by destroyer</small>
                    <p></p>
                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!-- Logout Modal-->
        <div id='myModal' class='modal fade'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal'
                                aria-hidden='true'>&times;</button>
                        <h4 class='modal-title'>Information</h4>
                    </div>
                    <div class='modal-body'>
                        <address>
                            <strong>NOA</strong><br>
                            Multi-platform Voice Assistant (MAC/Linux/Windows/Raspberry)
                        </address>
                        <address>
                            <strong>Web</strong><br>
                            https://noa-project.tk
                        </address>
                        <address>
                            <strong>Github</strong><br>
                            https://github.com/davidcf/noa.git
                        </address>
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:#">noa-project@gmail.com</a>
                        </address>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-default' data-dismiss='modal'>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <script src='../js/jquery-1.12.0.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>
        <script type='text/javascript'>
            for (var i = 0; i < document.links.length; i++) {
                if (document.links[i].href == document.URL) {
                    document.links[i].className = 'active';
                }
            }
        </script>
    </body>
</html>

