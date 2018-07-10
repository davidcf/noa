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
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>N.O.A. - Configurations</title>
        <link rel='stylesheet' href='../css/bootstrap.min.css'>
        <link rel='stylesheet' href='../css/style.css'>
    </head>
    <body>

        <div class='wrapper'>
            <!-- Sidebar Holder -->
            <nav id='sidebar'>
                <div class='sidebar-header'>
                    <img src="img/urban.png" class="img-thumbnail" alt="urbancode">
                </div>
                <ul id="menu" class="list-unstyled components">
                    <li><a href="index.html"><i class="glyphicon glyphicon-th-list"></i>Aplicaciones</a></li>
                    <li><a href="help.html"><i class="glyphicon glyphicon-cog"></i>Componentes</a></li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id='content'>
                <div class="jumbotron">
                    <h2 class="display-3">Hello, world!</h2>
                    <p class="lead"><small>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</small></p>
                    <button type='button' class='btn btn-primary navbar-btn' >
                        <span><a  href='#myModal' data-toggle='modal'><strong> Información</strong></a></span>
                    </button>

                </div>
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul  class='nav navbar-nav navbar-right'>
                        <span id="lastupdate" class="label label-primary"><i class="glyphicon glyphicon-calendar"></i> Aug 28, 2017 12:38:24 PM</span>
                    </ul>
                </div>                
                <h1>Typography</h1>
                <p>
                <p>
                <p>

                <p>
                <table>
                    <thead>
                        <tr><th>Option</th><th>Description</th></tr>
                    </thead>
                    <tbody  class="buscar">
                        <tr><td>data</td><td>path to data files to supply the data that will be passed into templates.</td></tr>
                        <tr><td>engine</td><td>engine to be used for processing templates. Handlebars is the default.</td></tr>
                        <tr><td>ext</td><td>extension to be used for dest files.</td></tr>
                    </tbody>
                </table>


<table">
  <thead>
    <tr>
      <th scope="col">Mandate 1</th>
      <th scope="col">Mandate 2</th>
      <th scope="col">Mandate 3</th>
      <th scope="col">Action</th>
      <th scope="col">Answer</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $result->fetchArray()) {?>
    <tr>
      <td><?php echo $row['mandate1'];?></td>
      <td><?php echo $row['mandate2'];?></td>
      <td><?php echo $row['mandate3'];?></td>
      <td><?php echo $row['action'];?></td>
      <td><?php echo $row['answer'];?></td>
	  <td><a class="btn btn-success" href="update-action.php?id=<?php echo $row['rowid'];?>" role="button">Edit</a> <a class="btn btn-danger" href="delete-action.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure delete action?');">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


                <h2>Headings</h2>
                <hr />
                <p>Headings from <code>h1</code> through <code>h6</code> are constructed with a <code>#</code> for each level:</p>

            </div>

        </div>
        <!--Footer-->
        <footer class="container-fluid bg-4 text-center">

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    <p></p>
                    <smal> © 2017 Copyright Produccion Central Web / UrbanCode</small>
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
                        <h4 class='modal-title'>Información</h4>
                    </div>
                    <div class='modal-body'>
                        <address>
                            <strong>Produccion Central Web / UrbanCode</strong><br>
                            1355 Market Street, Suite 900<br>
                            San Francisco, CA 94103<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
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
        <script type="text/javascript">
            $(document).ready(function () {
                (function ($) {
                    $('#filtrar').keyup(function () {
                        var rex = new RegExp($(this).val(), 'i');
                        $('.buscar tr').hide();
                        $('.buscar tr').filter(function () {
                            return rex.test($(this).text());
                        }).show();
                    })
                }(jQuery));
            });
        </script>   
    </body>
</html>