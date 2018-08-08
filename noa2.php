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
<head>
   <meta charset="utf-8">
   <meta content='IE=8' http-equiv='X-UA-Compatible'>
   <title>NOA - Assitant</title>
   <meta name="viewport" content="width=device-width">
   <link rel='stylesheet' href='css/noa-style.css'>
   <link rel="icon" type="image/png" href="img/noa.png" />
   <script src="js/jquery-min.js"></script>
   <script src="js/bufferloader.js"></script>
   <script src="js/id3-minimized.js"></script>
   <script src="js/audiovisualisierung.js"></script>
   <script src='js/noa.js'></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
</head>
<body>

   <script>
      useMic('<?php echo $name;?>')
      
      function processVoice(voz){
      //window.open('noa-process-voice.php?voz='+voz);
        nexecute(voz);
      }
      
      if (annyang) {
      annyang.setLanguage('<?php echo $language;?>');
      var commands = {
       '<?php echo $name;?> *voz' : processVoice
       };
       //document.write(5 + 6);
      annyang.addCommands(commands);
      annyang.start();
      }
   </script>	  
   
   <div id="song_info_wrapper">
      <div id="artist"></div>
      <div id="title"></div>
      <div id="album"></div>
   </div>
   <canvas id="freq" width="1024" height="525"></canvas>
</body>
</html>