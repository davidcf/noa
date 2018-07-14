<?php

// Includs database connection
include "noa-db_connect.php";
include "noa-languages.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM actions";
$result = $db->query($query);

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
                        <a class="btn btn-success btn-sm" href="noa-add-action.php" role="button"><?php echo $lang["text05"];?></a>
                    </ul>
                </div> 

                <h3><?php echo $lang["text06"];?></h3>
                <hr />              

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"><?php echo $lang["text07"];?></th>
                      <th scope="col"><?php echo $lang["text08"];?></th>
                      <th scope="col"><?php echo $lang["text09"];?></th>
                      <th scope="col"><?php echo $lang["text10"];?></th>
                      <th scope="col"><?php echo $lang["text11"];?></th>
                      <th scope="col"><?php echo $lang["text12"];?></th>
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
                          <td><a class="btn btn-success btn-sm" href="noa-update-action.php?id=<?php echo $row['rowid'];?>" role="button"><?php echo $lang["text13"];?></a> <a class="btn btn-danger btn-sm" href="noa-delete-action.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('<?php echo $lang["text15"];?>');"><?php echo $lang["text14"];?></a></td>
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