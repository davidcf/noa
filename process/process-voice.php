<html>
<body>
<?php
$valor = $_REQUEST['voz'];
echo $valor;
if($valor=='hola' || $valor=='apagar la música' || $valor=='para la música')
{
 //exec('/usr/local/bin/gtts-cli/gtts-cli --lang es 'que ya le apagado, pesado' | /usr/bin/play -t mp3 -');
 //echo 'hola como estas';
//exec('/home/pi/textoAvoz.sh "Si mi amo"'); 
exec('echo "hola" >> /home/pi/salida.txt');
}

 //echo "<script>window.close();</script>";
?>
</body>
</html>
