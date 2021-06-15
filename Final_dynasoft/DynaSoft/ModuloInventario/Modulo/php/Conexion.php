<?php
    function conectar(){
        define("servidor","localhost");
        define("usuario","root");
        define("password","");
        define("bd","dynasoft");
        $resultado = mysqli_connect(servidor,usuario,password,bd);
        return $resultado;
    }
?>