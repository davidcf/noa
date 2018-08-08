<?php
   // load share code
   include "noa-share.php";
   
   $query = "SELECT * FROM configurations";
   $result = $db->query($query);
   $data = $result->fetchArray();
   $plugins= $data['pathscripts'];
   
   
   if($_FILES["zip_file"]["name"]) {
   	$filename = $_FILES["zip_file"]["name"];
   	$source = $_FILES["zip_file"]["tmp_name"];
   	$type = $_FILES["zip_file"]["type"];
   	
   	$name = explode(".", $filename);

   	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
   	foreach($accepted_types as $mime_type) {
   		if($mime_type == $type) {
   			$okay = true;
   			break;
   		} 
   	}
   	
   	$continue = strtolower($name[1]);
        echo $continue;
   	if($continue != 'zip') {
                $message = '<div class="alert alert-danger">'.$lang["text56"].'</div>';
   	}else{
   
            $target_path = "/home/pi/".$filename;  // change this to the correct site path
            if(move_uploaded_file($source, $target_path)) {           
                    $zip = new ZipArchive();
                    $x = $zip->open($target_path);
                    if ($x === true) {
                            $zip->extractTo($plugins."/"); // change this to the correct site path
                            $zip->close();

                            unlink($target_path);
                    }
                    $message = '<div class="alert alert-success">'.$lang["text54"].'</div>';
            } else {	
                    $message = '<div class="alert alert-danger">'.$lang["text55"].'</div>';
            }
        }
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
         <div id='content'>
            <h3><?php echo $lang["text53"];?></h3>
            <hr />
            <div><?php if($message) echo "<p>$message</p>"; ?></div>
            <form enctype="multipart/form-data" method="post" action="">
               <div class="form-group">
                  <label><?php echo $lang["text51"];?></label>
                  <input class="form-control" name="zip_file" type="file">
                  <small id="label4help" class="form-text text-muted"><label><?php echo $lang["text52"];?></label></small>
               </div>
               <input class="btn btn-secondary" name="submit" type="submit" value="<?php echo $lang["text50"];?>">
            </form>
            <br>
            <br>
            <h3><?php echo $lang["text57"];?></h3>
            <hr />
            <?php 
               $dir = new DirectoryIterator($plugins);
               foreach ($dir as $fileinfo) {
                   if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                       
                       $directorio = $fileinfo->getFilename();
                       $plug = parse_ini_file($plugins ."/". $directorio. "/info.txt");

                         echo '<div class="card">';
                         echo '  <div class="card-header">';
                         echo  $directorio;
                         echo '</div>';
                         echo '<div class="card-body">';
                         echo '  <h5 class="card-title">' . $plug["name"] . '</h5>';
                         echo '    <p class="card-text">' . $plug["description"] . '</p>';
                         echo '    <p><small><strong>Version: </strong>' . $plug["version"] . '</small></p>';
                         echo '    <p><small><strong>Dependencies: </strong>' . $plug["dependencies"] . '</small></p>';
                         echo '    <p><small><strong>Author: </strong>' . $plug["pepe"] . '</small></p>';
                         echo '    <a class="btn btn-danger btn-sm" href="noa-delete-plugin.php?id='.$directorio.'" onclick="return confirm("' . $lang["text58"] . '");">' . $lang['text58'] . '</a>';
                         echo '  </div>';
                         echo '</div> ';
                         echo '<p>';
                         echo '<p>';
                       
                   }
               }         
               
               ?>
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