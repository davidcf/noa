<?php

// Includs database connection
include "db_connect.php";
include "languages.php";

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

                <h3><?php echo $lang["text03"];?></h3>
                <hr />

<pre>MIT License 

Copyright (c) 2018 David Chivato de la Fuente - Destroyer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.</pre>

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