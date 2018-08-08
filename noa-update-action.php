<?php
   $message = "";
   
   // load share code
   include "noa-share.php";

   if( isset($_POST['submit_data']) ){

   	$id = $_POST['id'];
   	$mandate_1 = $_POST['mandate1'];
        $action = $_POST['action'];
        $answer = $_POST['answer'];

   	$query = "UPDATE actions set mandate1='$mandate_1', action='$action', answer='$answer' WHERE rowid=$id";

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
                  <label><?php echo $lang["text26"];?></label>
                  <select class="form-control" name="action">
                  <?php 
                     $dir = new DirectoryIterator('/home/pi/noa');
                     foreach ($dir as $fileinfo) {
                                  if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                                      $directorio = $fileinfo->getFilename();
                      		if($data['action']==$directorio){
                                          echo '<option value="' . $directorio. '" selected>' . $directorio. '</option>';
                                      }else{
                                          echo '<option value="' . $directorio. '">' . $directorio. '</option>';
                                      }
                                  }
                              }         
                            
                            ?>
                  </select>
                  <small id="label3help" class="form-text text-muted"><?php echo $lang["text27"];?></small>
               </div>
               <div class="form-group">
                  <label><?php echo $lang["text28"];?></label>
                  <input class="form-control" name="answer" type="text" value="<?php echo $data['answer'];?>" required>
                  <small id="label5help" class="form-text text-muted"><?php echo $lang["text29"];?></small>
               </div>
               <input class="btn btn-secondary" name="submit_data" type="submit" value="<?php echo $lang["text22"];?>">
            </form>
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