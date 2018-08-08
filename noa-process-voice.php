

<?php
   // load share code
   include "noa-share.php";
   
   //cargamos el path de los plugins
   $query = "SELECT * FROM configurations";
   $result = $db->query($query);
   $data = $result->fetchArray();
   $plugins= $data['pathscripts'];
   
   function say($msg) {
       echo "<script>var msg = new SpeechSynthesisUtterance();var voices = window.speechSynthesis.getVoices();msg.text = '" . $msg . "';speechSynthesis.speak(msg);</script>";
   }
   
   //Pasamos todo a minusculas
   $valor = $_REQUEST['voz'];
   $valor = strtolower($valor);
   
   //cargamos mensaje de error en caso de no encontrar el mandato
   $query = "SELECT * FROM configurations";
   $result = $db->query($query);
   $data = $result->fetchArray();
   $msgerr= $data['msgerror'];
   
   //Buscamos el mandato en las acciones
   $query = "SELECT rowid, * FROM actions WHERE mandate1='$valor'";
   echo $query;
   $result = $db->query($query);
   $data = $result->fetchArray();
   
   $MAN = $data['mandate1'];
   $ACT = $data['action'];
   $RES = $data['answer'];
   
   if($valor==$MAN )
   {
      if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
           echo 'Este un servidor usando Windows!';
       } else {
           echo 'Este es un servidor que no usa Windows!';
       }
      say($RES);
   }else{
      say($msgerr);
   }
   
   echo "<script>window.close();</script>";
   ?>