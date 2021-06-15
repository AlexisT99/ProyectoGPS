
<?php

    function conectar(){
        


        DEFINE('SERVIDOR','localhost');
        DEFINE('USUARIO','root');
        DEFINE('PASSWORD','');
        DEFINE('BD','dynasoft');
    
        $resultado = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BD);
        return $resultado;
}

?>