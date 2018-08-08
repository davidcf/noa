<?php
   // load share code
   include "noa-share.php";
   
   //cargamos el path de los plugins
   $query = "SELECT * FROM configurations";
   $result = $db->query($query);
   $data = $result->fetchArray();
   $plugins= $data['pathscripts'];
   $msgerr= $data['msgerror'];
   
   //Pasamos todo a minusculas
   $valor = $_REQUEST['voz'];
   $valor = strtolower($valor);
   
   //Buscamos el mandato en las acciones
   $query = "SELECT rowid, * FROM actions WHERE mandate1='$valor'";
   $result = $db->query($query);
   $data = $result->fetchArray();
   
   $MAN = $data['mandate1'];
   $ACT = $data['action'];
   $RES = $data['answer'];
   
   if($valor==$MAN )
   {
      echo $RES;
   }else{
       echo $msgerr;
   }
   
   ?>