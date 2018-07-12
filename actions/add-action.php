<?php
include "languages.php";
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
		$message = '<div class="alert alert-success">'.$lang["text32"].'</div>';
	}else{
		$message = '<div class="alert alert-danger">'.$lang["text31"].'</div>';
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>NOA - <?php echo $lang["text01"];?></title>
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
                    <li><a href="home.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="noa-config.php"><i class="glyphicon glyphicon-list-alt"></i><?php echo $lang["text01"];?></a></li>
                    <li><a href="list-actions.php"><i class="glyphicon glyphicon-tasks"></i><?php echo $lang["text02"];?></a></li>
                    <li><a href="license.php"><i class="glyphicon glyphicon-copyright-mark"></i><?php echo $lang["text03"];?></a></li>
                    <li><a href='#myModal' data-toggle='modal'><i class="glyphicon glyphicon-briefcase"></i>Info</a></li>
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
                        <a class="btn btn-success btn-sm" href="list-actions.php" role="button"><?php echo $lang["text23"];?></a>
                    </ul>
                </div>
                <h3><?php echo $lang["text34"];?></h3>
                <hr />

      <div><?php echo $message;?></div>

        <form action="add-action.php" method="post">
          <div class="form-group">
            <label><?php echo $lang["text07"];?></label>
            <input class="form-control" name="mandate1" type="text" required>
            <small id="label1help" class="form-text text-muted"><label><?php echo $lang["text25"];?></label></small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text08"];?></label>
            <input class="form-control" name="mandate2" type="text" required>
            <small id="label2help" class="form-text text-muted"><label><?php echo $lang["text25"];?></label></small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text09"];?></label>
            <td><input class="form-control" name="mandate3" type="text" required>
            <small id="label3help" class="form-text text-muted"><label><?php echo $lang["text25"];?></label></small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text26"];?></label>
            <input class="form-control" name="action" type="text">
            <small id="label4help" class="form-text text-muted"><label><?php echo $lang["text27"];?></label></small>
          </div>
          <div class="form-group">
            <label><?php echo $lang["text28"];?></label>
            <input class="form-control" name="answer" type="text" required>
            <small id="label5help" class="form-text text-muted"><label><?php echo $lang["text29"];?></label></small>
          </div>
          <input class="btn btn-primary" name="submit_data" type="submit" value="<?php echo $lang["text35"];?>">
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