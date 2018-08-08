<?php
   // load share code
   include "noa-share.php";

   //Load language and assistan name.
   $query = "SELECT * FROM configurations";
   $result = $db->query($query);
   $data = $result->fetchArray();
   $name= $data['assistant_name'];
   $language = $data['language'];
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>NOA - Project</title>
      <link rel='stylesheet' href='css/bootstrap.min.css'>
      <link rel='stylesheet' href='css/styles.css'>
      <link rel="icon" type="image/png" href="img/code.png" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class='wrapper'>
         <!-- Sidebar Holder -->
         <nav id='sidebar'>
            <div class='sidebar-header'>
               <div class="card text-center bg-dark mb-3">
                  <div class="card-header">
                     <h5 class="noa-code-nav">NOA - Project</h5>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Version <?php echo $ver["VERSION"];?></h5>
                     <p class="card-text">
                        <smal class="noa-code-copyright">
                        © 2018 by destroyer</small>
                     </p>
                  </div>
               </div>
               <ul id="menu" class="list-unstyled components">
                  <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="noa-config.php"><i class="fa fa-cog"></i><?php echo $lang["text01"];?></a></li>
                  <li><a href="noa-list-actions.php"><i class="fa fa-bars"></i><?php echo $lang["text02"];?></a></li>
                  <li><a href="noa-upload-plugin.php"><i class="fa fa-simplybuilt"></i>Plugins</a></li>
               </ul>
            </div>
         </nav>
         <!-- Page Content Holder -->
         <div id='content'>
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
               <ul  class='nav navbar-nav navbar-right'>
                  <a class="btn btn-success btn-sm" href="noa-list-actions.php" role="button"><?php echo $lang["text23"];?></a>
               </ul>
            </div>
            <div class="card text-center">
               <div class="card-header">
                  <h1 class="noa-code-front">NOA - Project</h1>
               </div>
               <div class="card-body">
                  <h5 class="card-title"><?php echo $lang["text04"];?></h5>
                  <p class="card-text">Linux / Windows / MAC / Raspberry</p>
                  <a href="noa.php" target="_blank" class="btn btn-danger">START</a>
               </div>
               <div class="card-footer text-muted">
                  © 2018 Noa - Project by destroyer
               </div>
            </div>
            <p>
            <p>                              
            <p>            
            <div class="row">
               <div class="col-sm-6">
                  <div class="card text-center">
                     <div class="card-header">
                        <i class="fa fa-cloud" style="font-size:60px;color:gray;"></i>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">WWW</h5>
                        <p class="card-text">https://noa-project.tk</p>
                        <a href="https://noa-project.tk" target="_blank" class="btn btn-secondary">Go</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="card text-center">
                     <div class="card-header">
                        <i class="fa fa-github" style="font-size:60px;color:gray;"></i>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Github</h5>
                        <p class="card-text">https://github.com/davidcf/noa</p>
                        <a href="https://github.com/davidcf/noa" target="_blank" class="btn btn-secondary">Go</a>
                     </div>
                  </div>
               </div>
            </div>
            <p>
            <p>
            <div class="card">
               <div class="card-header">
                  <i class="fa fa-copyright"></i> <?php echo $lang["text03"];?>
               </div>
               <div class="card-body">
                  <h5 class="card-title">MIT License </h5>
                  <p>Copyright (c) 2018 David Chivato de la Fuente - Destroyer 
                  <p>
                     Permission is hereby granted, free of charge, to any person obtaining a copy
                     of this software and associated documentation files (the "Software"), to deal
                     in the Software without restriction, including without limitation the rights
                     to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                     copies of the Software, and to permit persons to whom the Software is
                     furnished to do so, subject to the following conditions:
                     The above copyright notice and this permission notice shall be included in all
                     copies or substantial portions of the Software.
                  <p>
                     THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                     IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                     FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                     AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                     LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                     OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                     SOFTWARE.
                  </p>
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