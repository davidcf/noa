<?php
   // load share code
   include "noa-share.php";
   
   $message = "";

   if( isset($_POST['submit_data']) ){
   
   	// Gets the data from post
   	$id = $_POST['id'];
   	$assistant_name = $_POST['assistant_name'];
   	$language = $_POST['language'];
        $name = $_POST['name'];
        $langidioma = $_POST['lang'];
        $msgerror = $_POST['msgerror'];
        $pathscripts = $_POST['pathscripts'];

   	$query = "UPDATE configurations set assistant_name='$assistant_name', language='$language', name='$name', lang='$langidioma', msgerror='$msgerror', pathscripts='$pathscripts' WHERE rowid=$id";

        if( $db->exec($query) ){
   		$message = '<div class="alert alert-success">'.$lang["text46"].'</div>';
   	}else{
   		$message = '<div class="alert alert-danger">'.$lang["text47"].'</div>';
   	}
   }
   
   $id = $_GET['id']; 
   $query = "SELECT rowid, * FROM configurations WHERE rowid=1";
   $result = $db->query($query);
   $data = $result->fetchArray(); 

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
            <h3><?php echo $lang["text01"];?></h3>
            <hr />
            <div><?php echo $message;?></div>
            <form action="" method="post">
               <input type="hidden" name="id" value="1">
               <div class="form-group">
                  <label><?php echo $lang["text16"];?></label>
                  <input class="form-control" name="assistant_name" type="text" value="<?php echo $data['assistant_name'];?>" required>
                  <small id="label1help" class="form-text text-muted"><?php echo $lang["text17"];?></small>
               </div>
               <div class="form-group">
                  <label><?php echo $lang["text18"];?></label>
                  <select class="form-control" name="language">
                     <option value="af" <?php if($data['language']=="af") echo "selected"; ?> >Afrikaans af</option>
                     <option value="eu" <?php if($data['language']=="eu") echo "selected"; ?> >Basque eu</option>
                     <option value="bg" <?php if($data['language']=="bg") echo "selected"; ?> >Bulgarian bg</option>
                     <option value="ca" <?php if($data['language']=="ca") echo "selected"; ?> >Catalan ca</option>
                     <option value="ar-EG" <?php if($data['language']=="ar-EG") echo "selected"; ?> >Arabic (Egypt) ar-EG</option>
                     <option value="ar-JO" <?php if($data['language']=="ar-JO") echo "selected"; ?> >Arabic (Jordan) ar-JO</option>
                     <option value="ar-KW" <?php if($data['language']=="ar-KW") echo "selected"; ?> >Arabic (Kuwait) ar-KW</option>
                     <option value="ar-LB" <?php if($data['language']=="ar-LB") echo "selected"; ?> >Arabic (Lebanon) ar-LB</option>
                     <option value="ar-QA" <?php if($data['language']=="ar-QA") echo "selected"; ?> >Arabic (Qatar) ar-QA</option>
                     <option value="ar-AE" <?php if($data['language']=="ar-AE") echo "selected"; ?> >Arabic (UAE) ar-AE</option>
                     <option value="ar-MA" <?php if($data['language']=="ar-MA") echo "selected"; ?> >Arabic (Morocco) ar-MA</option>
                     <option value="ar-IQ" <?php if($data['language']=="ar-IQ") echo "selected"; ?> >Arabic (Iraq) ar-IQ</option>
                     <option value="ar-DZ" <?php if($data['language']=="ar-DZ") echo "selected"; ?> >Arabic (Algeria) ar-DZ</option>
                     <option value="ar-BH" <?php if($data['language']=="ar-BH") echo "selected"; ?> >Arabic (Bahrain) ar-BH</option>
                     <option value="ar-LY" <?php if($data['language']=="ar-LY") echo "selected"; ?> >Arabic (Lybia) ar-LY</option>
                     <option value="ar-OM" <?php if($data['language']=="ar-OM") echo "selected"; ?> >Arabic (Oman) ar-OM</option>
                     <option value="ar-SA" <?php if($data['language']=="ar-SA") echo "selected"; ?> >Arabic (Saudi Arabia) ar-SA</option>
                     <option value="ar-TN" <?php if($data['language']=="ar-TN") echo "selected"; ?> >Arabic (Tunisia) ar-TN</option>
                     <option value="ar-YE" <?php if($data['language']=="ar-YE") echo "selected"; ?> >Arabic (Yemen) ar-YE</option>
                     <option value="cs" <?php if($data['language']=="cs") echo "selected"; ?> >Czech cs</option>
                     <option value="nl-NL" <?php if($data['language']=="nl-NL") echo "selected"; ?> >Dutch nl-NL</option>
                     <option value="en-AU" <?php if($data['language']=="en-AU") echo "selected"; ?> >English (Australia) en-AU</option>
                     <option value="en-CA" <?php if($data['language']=="en-CA") echo "selected"; ?> >English (Canada) en-CA</option>
                     <option value="en-IN" <?php if($data['language']=="en-IN") echo "selected"; ?> >English (India) en-IN</option>
                     <option value="en-NZ" <?php if($data['language']=="en-NZ") echo "selected"; ?> >English (New Zealand) en-NZ</option>
                     <option value="en-ZA" <?php if($data['language']=="en-ZA") echo "selected"; ?> >English (South Africa) en-ZA</option>
                     <option value="en-GB" <?php if($data['language']=="en-GB") echo "selected"; ?> >English(UK) en-GB</option>
                     <option value="en-US" <?php if($data['language']=="en-US") echo "selected"; ?> >English(US) en-US</option>
                     <option value="fi" <?php if($data['language']=="fi") echo "selected"; ?> >Finnish fi</option>
                     <option value="fr-FR" <?php if($data['language']=="fr-FR") echo "selected"; ?> >French fr-FR</option>
                     <option value="gl" <?php if($data['language']=="	gl") echo "selected"; ?> >Galician gl</option>
                     <option value="de-DE" <?php if($data['language']=="de-DE") echo "selected"; ?> >German de-DE</option>
                     <option value="el-GR" <?php if($data['language']=="el-GR") echo "selected"; ?> >Greek el-GR</option>
                     <option value="he" <?php if($data['language']=="he") echo "selected"; ?> >Hebrew he</option>
                     <option value="hu" <?php if($data['language']=="hu") echo "selected"; ?> >Hungarian hu</option>
                     <option value="is" <?php if($data['language']=="is") echo "selected"; ?> >Icelandic is</option>
                     <option value="it-IT" <?php if($data['language']=="it-IT") echo "selected"; ?> >Italian it-IT</option>
                     <option value="id" <?php if($data['language']=="id") echo "selected"; ?> >Indonesian id</option>
                     <option value="ja" <?php if($data['language']=="ja") echo "selected"; ?> >Japanese ja</option>
                     <option value="ko" <?php if($data['language']=="ko") echo "selected"; ?> >Korean ko</option>
                     <option value="la" <?php if($data['language']=="la") echo "selected"; ?> >Latin la</option>
                     <option value="zh-CN" <?php if($data['language']=="zh-CN") echo "selected"; ?> >Mandarin Chinese zh-CN</option>
                     <option value="zh-TW" <?php if($data['language']=="zh-TW") echo "selected"; ?> >Traditional Taiwan zh-TW</option>
                     <option value="zh-CN ?" <?php if($data['language']=="zh-CN ?") echo "selected"; ?> >Simplified China zh-CN</option>
                     <option value="zh-HK" <?php if($data['language']=="zh-HK") echo "selected"; ?> >Simplified Hong Kong zh-HK</option>
                     <option value="zh-yue" <?php if($data['language']=="zh-yue") echo "selected"; ?> >Yue Chinese (Traditional Hong Kong) zh-yue</option>
                     <option value="ms-MY" <?php if($data['language']=="ms-MY") echo "selected"; ?> >Malaysian ms-MY</option>
                     <option value="no-NO" <?php if($data['language']=="no-NO") echo "selected"; ?> >Norwegian no-NO</option>
                     <option value="pl" <?php if($data['language']=="pl") echo "selected"; ?> >Polish pl</option>
                     <option value="pt-PT" <?php if($data['language']=="pt-PT") echo "selected"; ?> >Portuguese pt-PT</option>
                     <option value="pt-BR" <?php if($data['language']=="pt-BR") echo "selected"; ?> >Portuguese (Brasil) pt-BR</option>
                     <option value="ro-RO" <?php if($data['language']=="ro-RO") echo "selected"; ?> >Romanian ro-RO</option>
                     <option value="ru" <?php if($data['language']=="ru") echo "selected"; ?> >Russian ru</option>
                     <option value="sr-SP" <?php if($data['language']=="sr-SP") echo "selected"; ?> >Serbian sr-SP</option>
                     <option value="sk" <?php if($data['language']=="sk") echo "selected"; ?> >Slovak sk</option>
                     <option value="es-AR" <?php if($data['language']=="es-AR") echo "selected"; ?> >Spanish (Argentina) es-AR</option>
                     <option value="es-BO" <?php if($data['language']=="es-BO") echo "selected"; ?> >Spanish (Bolivia) es-BO</option>
                     <option value="es-CL" <?php if($data['language']=="es-CL") echo "selected"; ?> >Spanish (Chile) es-CL</option>
                     <option value="es-CO" <?php if($data['language']=="es-CO") echo "selected"; ?> >Spanish (Colombia) es-CO</option>
                     <option value="es-CR" <?php if($data['language']=="es-CR") echo "selected"; ?> >Spanish (Costa Rica) es-CR</option>
                     <option value="es-DO" <?php if($data['language']=="es-DO") echo "selected"; ?> >Spanish (Dominican Republic) es-DO</option>
                     <option value="es-EC" <?php if($data['language']=="es-EC") echo "selected"; ?> >Spanish (Ecuador) es-EC</option>
                     <option value="es-SV" <?php if($data['language']=="es-SV") echo "selected"; ?> >Spanish (El Salvador) es-SV</option>
                     <option value="es-GT" <?php if($data['language']=="es-GT") echo "selected"; ?> >Spanish (Guatemala) es-GT</option>
                     <option value="es-HN" <?php if($data['language']=="es-HN") echo "selected"; ?> >Spanish (Honduras) es-HN</option>
                     <option value="es-MX" <?php if($data['language']=="es-MX") echo "selected"; ?> >Spanish (Mexico) es-MX</option>
                     <option value="es-NI" <?php if($data['language']=="es-NI") echo "selected"; ?> >Spanish (Nicaragua) es-NI</option>
                     <option value="es-PA" <?php if($data['language']=="es-PA") echo "selected"; ?> >Spanish (Panama) es-PA</option>
                     <option value="es-PY" <?php if($data['language']=="es-PY") echo "selected"; ?> >Spanish (Paraguay) es-PY</option>
                     <option value="es-PE" <?php if($data['language']=="es-PE") echo "selected"; ?> >Spanish (Peru) es-PE</option>
                     <option value="es-PR" <?php if($data['language']=="es-PR") echo "selected"; ?> >Spanish (Puerto Rico) es-PR</option>
                     <option value="es-ES" <?php if($data['language']=="es-ES") echo "selected"; ?> >Spanish (Spain) es-ES</option>
                     <option value="es-US" <?php if($data['language']=="es-US") echo "selected"; ?> >Spanish (US) es-US</option>
                     <option value="es-UY" <?php if($data['language']=="es-UY") echo "selected"; ?> >Spanish (Uruguay) es-UY</option>
                     <option value="es-VE" <?php if($data['language']=="es-VE") echo "selected"; ?> >Spanish (Venezuela) es-VE</option>
                     <option value="sv-SE" <?php if($data['language']=="sv-SE") echo "selected"; ?> >Swedish sv-SE</option>
                     <option value="tr" <?php if($data['language']=="tr") echo "selected"; ?> >Turkish tr</option>
                     <option value="zu" <?php if($data['language']=="zu") echo "selected"; ?> >Zulu zu</option>
                  </select>
                  <small id="label2help" class="form-text text-muted"><?php echo $lang["text18"];?></small>
               </div>
               <div class="form-group">
                  <label for="label3"><?php echo $lang["text19"];?></label>
                  <td>
                     <input class="form-control" name="name" type="text" value="<?php echo $data['name'];?>" required>
                     <small id="label3help" class="form-text text-muted"><?php echo $lang["text20"];?></small>
               </div>
               <div class="form-group">
               <label><?php echo $lang["text21"];?></label>
               <select class="form-control" name="lang">
               <option value="spanish" <?php if($data['lang']=="spanish") echo "selected"; ?> >Spanish</option>
               <option value="english" <?php if($data['lang']=="english") echo "selected"; ?> >English</option>
               </select>
               <small id="label3help" class="form-text text-muted"><?php echo $lang["text21"];?></small>
               </div>
               <div class="form-group">
               <label><?php echo $lang["text08"];?></label>
               <input class="form-control" name="msgerror" type="text" value="<?php echo $data['msgerror'];?>" required>
               <small id="label1help" class="form-text text-muted"><?php echo $lang["text09"];?></small>
               </div>
               <div class="form-group">
               <label><?php echo $lang["text48"];?></label>
               <input class="form-control" name="pathscripts" type="text" value="<?php echo $data['pathscripts'];?>" required>
               <small id="label1help" class="form-text text-muted"><?php echo $lang["text49"];?></small>
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