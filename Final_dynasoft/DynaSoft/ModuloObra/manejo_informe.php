<?php

    
    include ('conexionBD.php');
    include ('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','resistencias.php');
        return;
    }
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }    
    $idn = (!empty ($_GET['s1']) ) ? $_GET['s1'] : NULL; 
    if ( $idn ) {                    #3
        $s1= $_GET['s1'];
        $sql = "delete from informe_resistencias where ID_INFORME_RESIS='$s1'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('resistencias.php');     
    } else {
        $s1="";
    }
    
    if (isset($_POST["buscar"])) { 
        $nom = $_POST['nom_obra'];
        $sql = "select ID_INFORME_RESIS, ID_OBRA from informe_resistencias where ID_OBRA ='$nom'";
        $resultado = mysqli_query($conexion,$sql);
        while ($row = mysqli_fetch_array($resultado)) {
            $t1 = $row['ID_INFORME_RESIS'];
            $t2 = $row['ID_OBRA'];
            header('Location: resistencias.php?t1='.$t1.'&t2='.$t2);
        }
        mysqli_close($conexion);
    }

    if (isset($_POST["limpiar"])) { 
        redireccionarR('resistencias.php');
    }

    if (isset($_POST["guardar"])) { 
        $id = $_POST['id_inf'];
        $nom = $_POST['nom_obra'];
        $ens = $_POST['num_ens'];
        $mues = $_POST['muestra'];
        $prop = $_POST['proporcion'];
        $rev = $_POST['reve'];
        $adi = $_POST['adi'];
        $tipo = $_POST['tipo_adi'];
        $marc = $_POST['marca_adi'];
        $cant = $_POST['cant_adi'];
        $fin = $_POST['fin_adi'];
        $eqmez = $_POST['eq_mez'];
        $eqaco = $_POST['eq_aco'];
        $diam = $_POST['diam'];
        $secc = $_POST['secc'];
        $fchcol = $_POST['fecha_col'];
        $fchrup = $_POST['fecha_rup'];
        $edad = $_POST['edad'];
        $procc = $_POST['proc_cur'];
        $carg = $_POST['carga'];
        $res = $_POST['res'];
        $respr = $_POST['res_proy'];
        $lab = $_POST['labor'];
        $jefe = $_POST['jefe_lab'];
        $fchprueb = $_POST['fecha_prueb'];
        $fchinf = $_POST['fecha_inf'];
        $tomada = $_POST['tomada'];
        $obsv = $_POST['observaciones'];
        $sql = "insert into informe_resistencias (ID_INFORME_RESIS, ID_OBRA, NO_ENSAYO_RESIS, NO_MUESTRA_RESIS, PROPORCIONAMIENTO_FC, REVENIMIENTO_CM, ADICIONANTE, TIPO_RESIS, MARCA_RESIS, CANTIDAD_USADA, FINALIDAD, EQUIPO_MEZCLADO_CAPACIDAD,EQUIPO_ACOMODO_CONCRETO,DIAMETRO_CM,SECCION_CM2, FECHA_COLADO, FECHA_RUPTURA, EDAD_DIAS, PROCEDIMIENTO_CURADO, CARGA_ROPTURA_KG, RESISTENCIA_KG_CM2, RESISTENCIA_PROYECTO, LABORATORISTA, JEFE_LABORATORIO, FECHA_PRUEBA, FECHA_INFORME,TOMADA,OBSERVACIONES) VALUES ('$id','$nom','$ens','$mues','$prop','$rev','$adi','$tipo','$marc','$cant','$fin','$eqmez','$eqaco','$diam','$secc','$fchcol','$fchrup','$edad','$procc','$carg','$res','$respr','$lab','$jefe','$fchprueb','$fchinf','$tomada','$obsv')";
        
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('resistencias_1.php');
    }

    /*if (isset($_POST["eliminar"])) {
        $sql = "delete from informe_resistencias where ID_INFORME_RESIS='$s1'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        //redireccionarR('resistencias.php');    
    }*/

    if (isset($_POST["actualizar"])) { 
        $id = $_POST['id_inf'];
        $nom = $_POST['nom_obra'];
        $ens = $_POST['num_ens'];
        $mues = $_POST['muestra'];
        $prop = $_POST['proporcion'];
        $rev = $_POST['reve'];
        $adi = $_POST['adi'];
        $tipo = $_POST['tipo_adi'];
        $marc = $_POST['marca_adi'];
        $cant = $_POST['cant_adi'];
        $fin = $_POST['fin_adi'];
        $eqmez = $_POST['eq_mez'];
        $eqaco = $_POST['eq_aco'];
        $diam = $_POST['diam'];
        $secc = $_POST['secc'];
        $fchcol = $_POST['fecha_col'];
        $fchrup = $_POST['fecha_rup'];
        $edad = $_POST['edad'];
        $procc = $_POST['proc_cur'];
        $carg = $_POST['carga'];
        $res = $_POST['res'];
        $respr = $_POST['res_proy'];
        $lab = $_POST['labor'];
        $jefe = $_POST['jefe_lab'];
        $fchprueb = $_POST['fecha_prueb'];
        $fchinf = $_POST['fecha_inf'];
        $tomada = $_POST['tomada'];
        $obsv = $_POST['observaciones'];
        
        $sql = "update informe_resistencias set ID_INFORME_RESIS='$id', ID_OBRA='$nom', NO_ENSAYO_RESIS='$ens', NO_MUESTRA_RESIS='$mues', PROPORCIONAMIENTO_FC ='$prop', REVENIMIENTO_CM ='$rev', ADICIONANTE='$adi', TIPO_RESIS='$tipo', MARCA_RESIS='$marc', CANTIDAD_USADA='$cant', FINALIDAD='$fin', EQUIPO_MEZCLADO_CAPACIDAD='$eqmez',EQUIPO_ACOMODO_CONCRETO='$eqaco',DIAMETRO_CM='$diam',SECCION_CM2='$secc', FECHA_COLADO='$fchcol', FECHA_RUPTURA='$fchrup', EDAD_DIAS='$edad', PROCEDIMIENTO_CURADO='$procc', CARGA_ROPTURA_KG='$carg', RESISTENCIA_KG_CM2='$res', RESISTENCIA_PROYECTO='$respr', LABORATORISTA='$lab', JEFE_LABORATORIO='$jefe', FECHA_PRUEBA='$fchprueb', FECHA_INFORME='$fchinf',TOMADA='$tomada',OBSERVACIONES='$obsv' where ID_INFORME_RESIS='$id'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('resistencias.php');
    }

    if (isset($_POST["verinforme"])) { 
        $id = $_POST['id_inf'];
        $sql = "select * from informe_resistencias where ID_INFORME_RESIS ='$id'";
        $resultado = mysqli_query($conexion,$sql);
        while ($row = mysqli_fetch_array($resultado)) {
            $t1 = $row['ID_INFORME_RESIS'];
            $t2 = $row['ID_OBRA'];
            $t3 = $row['NO_ENSAYO_RESIS'];
            $t4 = $row['NO_MUESTRA_RESIS'];
            $t5 = $row['PROPORCIONAMIENTO_FC'];
            $t6 = $row['REVENIMIENTO_CM'];
            $t7 = $row['ADICIONANTE'];
            $t8 = $row['TIPO_RESIS'];
            $t9 = $row['MARCA_RESIS'];
            $t10 = $row['CANTIDAD_USADA'];
            $t11 = $row['FINALIDAD'];
            $t12 = $row['EQUIPO_MEZCLADO_CAPACIDAD'];
            $t13 = $row['EQUIPO_ACOMODO_CONCRETO'];
            $t14 = $row['DIAMETRO_CM'];
            $t15 = $row['SECCION_CM2'];
            $t16 = $row['FECHA_COLADO'];
            $t17 = $row['FECHA_RUPTURA'];
            $t18 = $row['EDAD_DIAS'];
            $t19 = $row['PROCEDIMIENTO_CURADO'];
            $t20 = $row['CARGA_ROPTURA_KG'];
            $t21 = $row['RESISTENCIA_KG_CM2'];
            $t22 = $row['RESISTENCIA_PROYECTO'];
            $t23 = $row['LABORATORISTA'];
            $t24 = $row['JEFE_LABORATORIO'];
            $t25 = $row['FECHA_PRUEBA'];
            $t26 = $row['FECHA_INFORME'];
            $t27 = $row['TOMADA'];
            $t28 = $row['OBSERVACIONES'];
            header('Location: resistencias_1.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9.'&t10='.$t10.'&t11='.$t11.'&t12='.$t12.'&t13='.$t13.'&t14='.$t14.'&t15='.$t15.'&t16='.$t16.'&t17='.$t17.'&t18='.$t18.'&t19='.$t19.'&t20='.$t20.'&t21='.$t21.'&t22='.$t22.'&t23='.$t23.'&t24='.$t24.'&t25='.$t25.'&t26='.$t26.'&t27='.$t27.'&t28='.$t28);
        }
        mysqli_close($conexion);
    }
?>