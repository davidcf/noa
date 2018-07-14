<?php
include "noa-languages.php";
$message = ""; // initial message 
if( isset($_POST['submit_data']) ){

	// Includs database connection
	include "noa-db_connect.php";
        

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
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/styles.css'>
        <link rel="icon" type="image/png" href="img/code.png" />
    </head>
    <body>

        <div class='wrapper'>
            <!-- Sidebar Holder -->

            <!-- Page Content Holder -->
            <div id='content'>
                <div class="jumbotron">
                    <div class="card text-center">
                      <div class="card-header">
                        <h1 class="noa-code-front">NOA - Project</h1>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["text04"];?></h5>
                        <p class="card-text">Linux / Windows / MAC / Raspberry</p>
                        <h3> <a href="noa.php" target="_blank" class="btn btn-primary">START</a></h3>
                      </div>
                    </div>                    
                    
                    
                    
                </div>            
                    
                
<div class="container-fluid">
  <div class="row align-items-center">
      <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
                <a href='noa-config.php' ><img src="img/ajustes.png" class="img-polaroid" alt="ajustes"></a>
            </div>
            <div class="card-block">
              <h4 class="card-title"><?php echo $lang["text01"];?></h4>
              <p class="card-text"><?php echo $lang["text41"];?></p>
            </div>
        </div>         
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
                <a href='noa-list-actions.php'><img src="img/actions.png" class="img-polaroid" alt="<?php echo $lang["text02"];?>"></a>
            </div>
            <div class="card-block">
              <h4 class="card-title"><?php echo $lang["text02"];?></h4>
              <p class="card-text"><?php echo $lang["text42"];?></p>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
		<div class="card text-center">
            <div class="card-header">
                <a href='noa-license.php'><img src="img/autor.png" class="img-polaroid" alt="Licencia"></a>
            </div>
            <div class="card-block">
              <h4 class="card-title"><?php echo $lang["text03"];?></h4>
              <p class="card-text">MIT License - Copyright (c) 2018 Destroyer</p>
            </div>
        </div>
      </div>
  </div>
</div>

<br>
                
<div class="container-fluid">
  <div class="row align-items-center">
      <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
              <a href='https://noa-project.tk' target='_blank'><img src="img/www.png" class="img-polaroid" alt="version"></a>
            </div>
            <div class="card-block">
              <h4 class="card-title">Web</h4>
              <p class="card-text"><?php echo $lang["text43"];?></p>
            </div>
        </div>         
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
              <a href='https://github.com/davidcf/noa' target='_blank'><img src="img/github.png" class="img-polaroid" alt="github"></a>
            </div>
            <div class="card-block">
              <h4 class="card-title">Github</h4>
              <p class="card-text"><?php echo $lang["text44"];?></p>
            </div>
        </div> 
      </div>
      <div class="col-sm-4">
		<div class="card text-center">
            <div class="card-header">
                <a href='#myModal' data-toggle='modal' ><img src="img/version.png" class="img-polaroid" alt="version"></a>
            </div>
            <div class="card-block">
              <h4 class="card-title">Version</h4>
              <p class="card-text"><?php echo $lang["text45"];?>.</p>
            </div>
        </div>         
      </div>
  </div>
</div>             
                
                
            </div>

        </div>
        <!--Footer-->
        <footer class="container-fluid bg-4 text-center">

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    <p></p>
                    <smal> © 2018 NOA - Project by destroyer / Icons by <a href='https://icons8.com/' target="_blank">ICONS8</a></small>
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