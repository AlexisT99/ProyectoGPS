<?php
function redireccionar($mensaje, $dir){
       header('refresh:0,url='. $dir);
    }

function redireccionarR($dir){
       header('refresh:0.01,url='. $dir);
}

?>