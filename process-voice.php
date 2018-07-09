<html>
<body>
<?php
$valor = $_REQUEST['voz'];
exec('echo $valor >> /home/pi/salida.txt');
if($valor=='apaga la música' || $valor=='apagar la música' || $valor=='para la música')
{
 //exec('/usr/local/bin/gtts-cli/gtts-cli --lang es 'que ya le apagado, pesado' | /usr/bin/play -t mp3 -');
exec('/home/pi/textoAvoz.sh "Si mi amo"'); 
exec('echo "hola pesado" >> /home/pi/salida.txt');
}

if($valor=='sube electores' || $valor=='sube el store')
{
 //exec('/home/pi/textoAvoz.sh "Si mi amo"');
 //exec('/home/pi/estoresubeon.sh');
exec('echo "hola pesado" >> /home/pi/salida.txt');
}
if($valor=='pon la sexta' || $valor=='font la sexta' || $valor=='por la sexta')
{
 exec('/home/pi/textoAvoz.sh "Si mi amo"');
 exec('/home/pi/la6_enciende.sh');
}
 echo "<script>window.close();</script>";
?>
</body>
</html>
