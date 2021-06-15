<?php
    include ('conexionBD.php');
    include('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','muestreo_Concreto_Viajes_4.php');
        return;
    }
 

        /* *********************************************************************Eliminar***********************/
        if (isset($_POST["borrar"])) { 
       
            $id_Obra_Borrar = $_POST['id_Obra']; 
    
            $sql = "delete from informe_muestreo where ID_OBRA='$id_Obra_Borrar';";
            $resultado = mysqli_query($conexion,$sql);
            mysqli_close($conexion);
            redireccionar('Se ha eliminado exitosamente','muestreo_Concreto_Principal.php');
        }

        /* *********************************************************************Actualizar***********************/
        if (isset($_POST["actualizar"])) { 
       
    $id_Obra = $_POST['id_Obra'];
    $Ensaye = $_POST['Ensaye'];
    $fecha_Prueba = $_POST['fecha_Prueba'];
    $fecha_Informe = $_POST['fecha_Informe'];
    $Laboratorista = $_POST['Laboratorista'];
    $Firma_Lab = $_POST['Lab_Firma'];
    $Observa = $_POST['Observa'];

    $E_Colado = $_POST['E_Colado'];
    $Fc_Colado = $_POST['Fc_Colado'];
    $Aditivo = $_POST['Aditivo'];
    $Cantidad = $_POST['Cantidad'];
    $Fin_Aditivo = $_POST['Fin_Aditivo'];

        $E_A_Concreto = $_POST['E_A_Concreto'];
        $Temperatura = $_POST['Temperatura'];
        $Acarreo = $_POST['Acarreo'];
        $Tamaño = $_POST['Tamaño'];
        $T_Concreto = $_POST['Tipo_Concreco'];
        $T_Cemento = $_POST['Tipo_Cemento'];
        $H_Inicio = $_POST['H_Inicio'];
        $H_Final = $_POST['H_Final'];
        $Rev = $_POST['Rev'];
        $Concretera_Ubic = $_POST['Concretera_Ubic'];

        $sql = "update informe_muestreo set ENSAYE='$Ensaye',FECHA_PRUEBA='$fecha_Prueba', FECHA_INFORME='$fecha_Informe', ELEMENTO_COLADO='$E_Colado', FC_PROYECTO='$Fc_Colado', CANTIDAD_EMPLEADA='$Cantidad', 
        ADITIVO='$Aditivo', FINALIDAD_ADITIVO='$Fin_Aditivo',E_ACOMODAR_CONCRETO='$E_A_Concreto', E_ACARREAR_CONCRETO='$Acarreo', TEMPERATURA='$Temperatura', TAM_MAX='$Tamaño', REV_PYCT='$Rev', INICIO_COLADO='$H_Inicio', FINAL_COLADO='$H_Final', CONCRETERA_UBIC='$Concretera_Ubic', 
        TIPO_CONCRETO='$T_Concreto', TIPO_CEMENTO='$T_Cemento', LABORATORISTA='$Laboratorista', JEFE_LABORATORIO='$Firma_Lab', OBSERVACIONES='$Observa' where ID_OBRA='$id_Obra';";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha actualizado exitosamente','muestreo_Concreto_Principal.php');
    
        }

        /* *******************************************************SECCION DE CONSULTA************************   */
    if (isset($_POST["buscar"])) { 
        $id_Obra_Busqueda= $_POST['id_Obra_Busqueda'];
        $sql = "select * from informe_muestreo where ID_OBRA='$id_Obra_Busqueda';";
        $resultado = mysqli_query($conexion,$sql);
      
        while ($row = mysqli_fetch_array($resultado)) {
            
            $t1 =  $row['ID_OBRA'];
            $t2 =  $row['ENSAYE'];
            $t3 =  $row['FECHA_PRUEBA'];
            $t4 =  $row['FECHA_INFORME'];
            $t5 =  $row['LABORATORISTA'];
            $t6 =  $row['JEFE_LABORATORIO'];
            $t7 =  $row['OBSERVACIONES'];

            $t8 =  $row['ELEMENTO_COLADO'];
            $t9 =  $row['FC_PROYECTO'];
            $t10 =  $row['ADITIVO'];
            $t11 =  $row['CANTIDAD_EMPLEADA'];
            $t12 =  $row['FINALIDAD_ADITIVO'];

            $t13 =  $row['E_ACOMODAR_CONCRETO'];
            $t14 =  $row['TEMPERATURA'];
            $t15 =  $row['E_ACARREAR_CONCRETO'];
            $t16 =  $row['TAM_MAX'];
            $t17 =  $row['TIPO_CONCRETO'];
            $t18 =  $row['TIPO_CEMENTO'];
            $t19 =  $row['INICIO_COLADO'];
            $t20 =  $row['FINAL_COLADO'];
            $t21 =  $row['REV_PYCT'];
            $t22 =  $row['CONCRETERA_UBIC'];
           
      
            header('Location: muestreo_Concreto_Actualizar.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9.'&t10='.$t10.'&t11='.$t11.'&t12='.$t12.'&t13='.$t13.'&t13='.$t13.'&t14='.$t14.'&t15='.$t15.'&t16='.$t16.'&t17='.$t17.'&t18='.$t18.'&t19='.$t19.'&t20='.$t20.'&t21='.$t21.'&t22='.$t22);
 
                   
        }
        }
    
    
?>