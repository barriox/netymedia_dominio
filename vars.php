<?php
$asunto="Este mensaje ha sido enviado desde ";
$asunto.= $dominio;
$precio=0;
switch($dominio){
    case "protegeme.es":
        $precio=25.4;
        break;
    case "ejemplo.es":
        $precio=8;
        break;
    case "ejemplo.com":
        $precio=1;
        break;
    default:
        header('Location: http://www.netymedia.com/');
}
?>