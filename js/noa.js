/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Say (data) {
    var msg = new SpeechSynthesisUtterance();
    var voices = window.speechSynthesis.getVoices();
    msg.text = data;
    speechSynthesis.speak(msg);   
}

function nexecute (voz) {
    document.write('Reconocido: '+voz+ '<br>');
    $.ajax({
        url: 'noa-process-voice2.php',
        data: "voz="+voz,
        dataType: 'text',
        success: function(data)
            {
                Say (data);            
             },
             error: function()
             {
                Say ('Se ha producido un error al ejecutar el mandato');
             }
         });
}


