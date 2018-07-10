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
        <link rel='stylesheet' href='../css/styles.css'>
    </head>
    <body>

        <div class='wrapper'>
            <!-- Sidebar Holder -->
            <nav id='sidebar'>
                <div class='sidebar-header'>
                    <img src="../img/noa.png" class="img-thumbnail" alt="N.O.A. Project">
                </div>
                <ul id="menu" class="list-unstyled components">
                    <li><a href="home.html"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="noa-config.php"><i class="glyphicon glyphicon-list-alt"></i>Configurations</a></li>
                    <li><a href="list-actions.php"><i class="glyphicon glyphicon-tasks"></i>Actions</a></li>
                    <li><a href="license.html"><i class="glyphicon glyphicon-copyright-mark"></i>License</a></li>
                    <li><a href='#myModal' data-toggle='modal'><i class="glyphicon glyphicon-briefcase"></i>Info</a></li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id='content'>
                <div class="jumbotron">
                    <h3 class="display-3">N.O.A.</h3>
                    <p class="lead"><small>Multi-platform voice assistant.</small></p>
                </div>
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul  class='nav navbar-nav navbar-right'>
                        <span id="lastupdate" class="label label-primary">Aug 28, 2017 12:38:24 PM</span>
                    </ul>
                </div>                
                <h2>List of actions</h2>
                <hr />
                <p>List of actions to be carried out by N.O.A</p>


                <table class="table">
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
                          <td><a class="btn btn-success btn-sm" href="update-action.php?id=<?php echo $row['rowid'];?>" role="button">Edit</a> <a class="btn btn-danger btn-sm" href="delete-action.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure delete action?');">Delete</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

            </div>

        </div>
        <!--Footer-->
        <footer class="container-fluid bg-4 text-center">

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    <p></p>
                    <smal> © 2018 Destroyer Factory - N.O.A. Project</small>
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