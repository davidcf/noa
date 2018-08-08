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
   <link rel="icon" type="image/png" href="img/noa.png" />
   <script src="js/jquery-min.js"></script>
   <script src='js/noa.js'></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
   <link href="css/jquery.terminal.css" rel="stylesheet"/>
</head>
<body>

   <script>
      
    function PhpExecuteParam (voz,path) {
        document.write('Reconocido: '+voz+' Para ejecutar el Plugin: ' + path + '<br>');
        $.ajax({
            url: 'noa-process-voice2.php',
            data: "voz="+voz,
            dataType: 'text',
            success: function(data)
                {
                    Say (path);            
                 },
            error: function()
                 {
                    Say ('Se ha producido un error al ejecutar el mandato');
                 }
        });
    }

    function PhpExecute (path) {
        document.write('Para ejecutar el Plugin: ' + path + '<br>');
//        $.ajax({
//            url: 'noa-process-voice2.php',
//            data: "voz="+voz,
//            dataType: 'text',
//            success: function(data)
//                {
//                    Say (path);            
//                 },
//            error: function()
//                 {
//                    Say ('Se ha producido un error al ejecutar el mandato');
//                 }
//        });
    }

      if (annyang) {
      annyang.setLanguage('<?php echo $language;?>');
      var commands = {
       //'<?php echo $name;?> *voz' : function (voz){PhpExecuteParam(voz,'eres una pedorra');},
       '<?php echo $name;?> dame *voz' : function (voz){PhpExecuteParam(voz,'eres una pedorra');},
       '<?php echo $name;?> eres tonta' : function (){PhpExecute('eres muy tonta');}
       };
       //document.write(5 + 6);
      annyang.addCommands(commands);
      annyang.start();
      }
   </script>	  
</body>
</html>