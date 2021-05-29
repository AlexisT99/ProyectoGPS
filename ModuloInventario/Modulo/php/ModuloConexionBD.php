<?php
    function conectar(){
        DEFINE('SERVER','localhost');
        DEFINE('USER','root');
        DEFINE('PASSWORD','');
        DEFINE('BD','');

        $conection = mysqli_connect(SERVER,USER,PASSWORD,BD);
        return $conection;

?>