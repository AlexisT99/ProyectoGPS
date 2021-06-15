<?php

    
    include ('conexionBD.php');
    include ('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','ingresos.php');
        return;
    }
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }    
    $idn = (!empty ($_GET['s1']) ) ? $_GET['s1'] : NULL; 
    if ( $idn ) {                    #3
        $s1= $_GET['s1'];
        $sql = "delete from ingresos where IDINGRESO='$s1'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('ingresos.php');     
    } else {
        $s1="";
    }
    
    if (isset($_POST["buscar"])) { 
        $nom = $_POST['nom_obra'];
        $sql = "select IDINGRESO, ID_OBRA from ingresos where ID_OBRA ='$nom'";
        $resultado = mysqli_query($conexion,$sql);
        while ($row = mysqli_fetch_array($resultado)) {
            $t1 = $row['IDINGRESO'];
            $t2 = $row['ID_OBRA'];
            header('Location: ingresos.php?t1='.$t1.'&t2='.$t2);
        }
        mysqli_close($conexion);
    }

    if (isset($_POST["limpiar"])) { 
        redireccionarR('ingresos.php');
    }

    if (isset($_POST["guardar"])) { 
        $id = $_POST['id_ing'];
        $nom = $_POST['nom_obra'];
        $trab = $_POST['trabajador'];
        $monto = $_POST['monto'];
        $fecha = $_POST['fecha'];
        $desc = $_POST['descripcion'];
        $sql = "insert into ingresos (ID_OBRA, IDTRABAJADOR, MONTO_INGRESO, FECHAINGRESO, DESCRIPCIONINGRESO) VALUES ('$nom','$trab','$monto','$fecha','$desc')";
        
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('ingresos_1.php');
    }

    if (isset($_POST["actualizar"])) { 
        $id = $_POST['id_ing'];
        $nom = $_POST['nom_obra'];
        $trab = $_POST['trabajador'];
        $monto = $_POST['monto'];
        $fecha = $_POST['fecha'];
        $desc = $_POST['descripcion'];
        $sql = "update ingresos set ID_OBRA='$nom',IDTRABAJADOR='$trab', MONTO_INGRESO='$monto', FECHAINGRESO ='$fecha', DESCRIPCIONINGRESO ='$desc' WHERE IDINGRESO ='$id'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('ingresos.php');
    }

    if (isset($_POST["veringreso"])) { 
        $id = $_POST['id_ing'];
        $sql = "select * from ingresos where IDINGRESO ='$id'";
        $resultado = mysqli_query($conexion,$sql);
        while ($row = mysqli_fetch_array($resultado)) {
            $t1 = $row['IDINGRESO'];
            $t2 = $row['ID_OBRA'];
            $t3 = $row['IDTRABAJADOR'];
            $t4 = $row['MONTO_INGRESO'];
            $t5 = $row['FECHAINGRESO'];
            $t6 = $row['DESCRIPCIONINGRESO'];
            header('Location: ingresos_1.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6);
        }
        mysqli_close($conexion);
    }
?>