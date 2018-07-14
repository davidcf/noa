<?php
$message = "";

// Includs database connection
include "noa-db_connect.php";
include "noa-languages.php";

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
		$message = '<div class="alert alert-success">'.$lang["text36"].'</div>';
	}else{
		$message = '<div class="alert alert-danger">'.$lang["text37"].'</div>';
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
        <title>NOA - <?php echo $lang["text01"];?></title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/styles.css'>
        <link rel="icon" type="image/png" href="img/code.png" />
    </head>
    <body>

        <div class='wrapper'>
            <!-- Sidebar Holder -->
            <nav id='sidebar'>
                <div class='sidebar-header'>
                    <h2 class="noa-code">NOA - Project</h2>
                <ul id="menu" class="list-unstyled components">
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="noa-config.php"><i class="glyphicon glyphicon-list-alt"></i><?php echo $lang["text01"];?></a></li>
                    <li><a href="noa-list-actions.php"><i class="glyphicon glyphicon-tasks"></i><?php echo $lang["text02"];?></a></li>
                    <li><a href="noa-license.php"><i class="glyphicon glyphicon-copyright-mark"></i><?php echo $lang["text03"];?></a></li>
                    <li><a href="https://noa-project.tk" target="_blank"><i class="glyphicon glyphicon-cloud"></i>Web</a></li>
                    <li><a href="https://github.com/davidcf/noa" target="_blank"><i class="glyphicon glyphicon-download"></i>Github</a></li>
                    <li><a href='#myModal' data-toggle='modal'><i class="glyphicon glyphicon-briefcase"></i><?php echo $lang["text39"];?></a></li>
                </ul>
                    
                </div>

            </nav>
            <!-- Page Content Holder -->
            <div id='content'>
                <div class="jumbotron">
                    <h2 class="noa">NOA - <?php echo $lang["text01"];?></h2>
                    <small class="noa-small"><?php echo $lang["text04"];?></small>
                </div>             

                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul  class='nav navbar-nav navbar-right'>
                        <a class="btn btn-success btn-sm" href="noa-list-actions.php" role="button"><?php echo $lang["text23"];?></a>
                    </ul>
                </div>
                <h3><?php echo $lang["text24"];?></h3>
                <hr />

      <div><?php echo $message;?></div>

        <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
          <div class="form-group">
            <label><?php echo $lang["text07"];?></label>
            <input class="form-control" name="mandate1" type="text" value="<?php echo $data['mandate1'];?>" required>
            <small id="label1help" class="form-text text-muted"><?php echo $lang["text25"];?>.</small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text08"];?></label>
            <input class="form-control" name="mandate2" type="text" value="<?php echo $data['mandate2'];?>" required>
            <small id="label2help" class="form-text text-muted"><?php echo $lang["text25"];?></small>
          </div>
          <div class="form-group">
            <label for="label3"><?php echo $lang["text09"];?></label>
            <td><input class="form-control" name="mandate3" type="text" value="<?php echo $data['mandate3'];?>" required>
            <small id="label3help" class="form-text text-muted"><?php echo $lang["text25"];?></small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text26"];?></label>
            <input class="form-control" name="action" type="text" value="<?php echo $data['action'];?>">
            <small id="label4help" class="form-text text-muted"><?php echo $lang["text27"];?></small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text28"];?></label>
            <input class="form-control" name="answer" type="text" value="<?php echo $data['answer'];?>" required>
            <small id="label5help" class="form-text text-muted"><?php echo $lang["text29"];?></small>
          </div>
          <input class="btn btn-primary" name="submit_data" type="submit" value="<?php echo $lang["text22"];?>">
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
                            <h2 class="noa-code">NOA - Project</h2>
                            <h4 class="noa-small-box"><?php echo $lang["text04"];?></h4>
                        </address>
                        <address>
                            <h4 class="noa-version">Version</h4>
                            <h3 class="noa-version"><?php echo $ver["VERSION"];?></h3>
                        </address>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-default' data-dismiss='modal'>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <script src='js/jquery-min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script type='text/javascript'>
            for (var i = 0; i < document.links.length; i++) {
                if (document.links[i].href == document.URL) {
                    document.links[i].className = 'active';
                }
            }
        </script>
    </body>
</html>

