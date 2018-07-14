<html>
<body>
<?php
$valor = $_REQUEST['voz'];
if($valor=='apaga la música' || $valor=='apagar la música' || $valor=='para la música')
{
 exec('/home/pi/textoAvoz.sh "Si mi amo"');
 exec('/home/pi/musica_apaga.sh');
}

if($valor=='sube electores' || $valor=='sube el store')
{
 exec('/home/pi/textoAvoz.sh "Si mi amo"');
 exec('/home/pi/estoresubeon.sh');
}
if($valor=='pon la sexta' || $valor=='font la sexta' || $valor=='por la sexta')
{
 exec('/home/pi/textoAvoz.sh "Si mi amo"');
 exec('/home/pi/la6_enciende.sh');
}
 //echo "<script>window.close();</script>";
?>
</body>
</html>
