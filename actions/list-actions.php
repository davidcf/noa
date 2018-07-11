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
        <title>NOA - Configurations</title>
        <link rel='stylesheet' href='../css/bootstrap.min.css'>
        <link rel='stylesheet' href='../css/styles.css'>
    </head>
    <body>

        <div class='wrapper'>
            <!-- Sidebar Holder -->
            <nav id='sidebar'>
                <div class='sidebar-header'>
                    <img src="../img/noa.png" class="img-responsive" alt="NOA Project">
                </div>
                <ul id="menu" class="list-unstyled components">
                    <li><a href="home.html"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="noa-config.php"><i class="glyphicon glyphicon-list-alt"></i>Configurations</a></li>
                    <li><a href="list-actions.php"><i class="glyphicon glyphicon-tasks"></i>Actions</a></li>
                    <li><a href="license.php"><i class="glyphicon glyphicon-copyright-mark"></i>License</a></li>
                    <li><a href='#myModal' data-toggle='modal'><i class="glyphicon glyphicon-briefcase"></i>Info</a></li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id='content'>
                <div class="jumbotron">
                    <h3 class="display-3">NOA - Configurations</h3>
                </div>            
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul  class='nav navbar-nav navbar-right'>
                        <a class="btn btn-success btn-sm" href="add-action.php" role="button">Add new action</a>
                    </ul>
                </div> 

                <h2>List of actions</h2>
                <hr />              
                <p>List of actions to invoke with voice commands.</p>

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