<?php
   // load share code
   include "noa-share.php";
   
   $id = $_GET['id']; 
   $query = "SELECT * FROM configurations";
   $result = $db->query($query);
   $data = $result->fetchArray();
   $plugins= $data['pathscripts'];
   
   if(exec('rm -r ' . $plugins . '/'. $id)){
   	$message = '<div class="alert alert-danger">'.$lang["text61"].'</div>';
   }else{
   	$message = '<div class="alert alert-success">'.$lang["text60"].'</div>';
   }
   
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
               </ul>
            </div>
            <p></p>
            <p></p>
            <div><?php echo $message;?></div>
            <p>
            </p>
            <a class="btn btn-secondary btn-sm" href="noa-upload-plugin.php" role="button"><?php echo $lang["text59"];?></a>
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