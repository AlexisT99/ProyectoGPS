<?php
    /*Aquí vamos a tener funciones que se mandan llamar en diferentes páginas*/
    function redireccionar($mensaje, $dir) {
        include('includes/encabezado.php');
        echo '<div class="formulario-div" style="color:brown;">';
        echo '<h1 style="text-align:center;">'. $mensaje .'</h1>';
        echo '<h4 style="text-align:center">Redireccionando...</h4>';
        echo '</div>';
        header('refresh:3;url=' . $dir);
        include('includes/pie.php');
    }

    function validar($texto) {
        $texto = trim($texto);
        $texto = stripslashes($texto);
        $texto = htmlspecialchars($texto);
        return $texto;
    }

    function conectar(){
        DEFINE('SERVIDOR','localhost');
        DEFINE('USUARIO','root');
        DEFINE('PASSWORD','');
        DEFINE('BD','pasteleria');

        $resultado = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BD);
               
        return $resultado;
    }

    function subir_imagen($archivo) {
        
        if (empty($archivo)){
            return null;
        }

        $nombre = $archivo['name'];
        $origen = $archivo['tmp_name'];
        $tama = $archivo['size'];
        $error = $archivo['error'];

        $extensiones = array('jpg', 'jpeg', 'png');

        $nombre_y_ext = explode('.', $nombre);

        $extension = strtolower(end($nombre_y_ext));

        if(!in_array($extension, $extensiones)) {
            echo 'Archivo no válido';
            return null;
        }
        else if($tama > 1000000) {
            echo 'El archivo es más grande de lo permitido: máximo 1MB';
            return null;
        }
        else if($error > 0) {
            echo 'Error al subir el archivo';
            return null; 
        }
        else {
            $nuevo_nombre = uniqid('', true) . '.' . $extension;
            $destino = "../galeria/" . $nuevo_nombre;
            move_uploaded_file($origen, $destino);

            return $destino;
        }

    }
?>