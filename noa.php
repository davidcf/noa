<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta content='IE=8' http-equiv='X-UA-Compatible'>
        <title>NOA - Project</title>
        <meta name="viewport" content="width=device-width">
        <!-- Das favicon.ico und das apple-touch-icon.png in das root Verzeichnis -->
        <link rel="stylesheet" href="css/noa-style.css">
        <script src="js/jquery-min.js"></script>
        <script src="src/bufferloader.js"></script>
        <script src="src/id3-minimized.js"></script>
        <script src="src/audiovisualisierung.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
    </head>
    <body>	
<script>
useMic()

function openPage(voz){
window.open('noa-process-voice.php?voz='+voz);}

if (annyang) {
annyang.setLanguage('es-ES');
var commands = {
 'Antonia *voz' : openPage
 };
annyang.addCommands(commands);
annyang.start();
}
</script>	   
        <div id="song_info_wrapper">
        	<div id="artist">gggggggg</div>
			<div id="title">Unknown Titel</div>
			<div id="album">Unknown Album</div>
		</div>
        <canvas id="freq" width="1024" height="525"></canvas>
    </body>
</html>