
/* Configuração de Exibição de Data e Hora */

/* global clock */

if  ((document.getElementById) && window.addEventListener || window.attachEvent)
{
    function data_hora()
    {
        var data = new Date();
        var dia = data.getDate();
        var mes = data.getMonth()+1;
        var ano = data.getFullYear();
        var hours = data.getHours();
        var minutes = data.getMinutes();
        var seconds = data.getSeconds();
        if(dia <=9)
            dia="0"+dia;
        if(mes <=9)
            mes="0"+mes;
        if (hours <=9)
            hours="0"+hours;
        if (minutes<=9)
            minutes="0"+minutes;
        if (seconds<=9)
            seconds="0"+seconds;
        var cdate="<b><font color=#ff0000 face=arial size=2>"+dia+" / "+mes+" / "+ano+" - "+hours+":"+minutes+":"+seconds+" "+" </font>";
        clock.innerHTML= cdate;
        setTimeout("data_hora()",1000);
    }
}