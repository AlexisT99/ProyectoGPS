<?php
    include ('conexionBD.php');
    include('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','muestreo_Concreto_Viajes_4.php');
        return;
    }
 
    /* *******************************************************SECCION DE CONSULTA************************   */
    if (isset($_POST["buscar"])) { 
        $id_Obra_Busqueda= $_POST['id_Obra_Busqueda'];
        $sql = "select * from informe_muestreo where ID_OBRA='$id_Obra_Busqueda';";
        $resultado = mysqli_query($conexion,$sql);
        echo '
        <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Muestreo Concreto_Datos Viaje</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                        <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                        <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Presupuesto</a></li>
                        <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Obra</a></li>
                        <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Laboratorio</a></li>
                        <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Muestreo Concreto</a><a href="muestreo_concreto_DGenerales.php"
                                style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Datos
                                Generales</a>
                             <a href="muestreo_Concreto_EColado_2.php"style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Elemento
                                Colado</a><a href="muestreo_Concreto_Colado_3.php"
                                style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Concreto</a><a
                                href="muestreo_Concreto_Viajes_4.php"
                                style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Viaje
                                Muestreo</a></li>
                <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Muestreo Resistencias&nbsp;</a></li>
                <li> </li>
                <li class="sidebar-brand" style="margin-top: 100px;"> <a href="#"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;">Ir a Inventario</a><a
                        href="#" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;margin-top: -25px;">Ir
                        a Nomina</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button"
                    id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Obra</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 20px;padding-bottom: 0px;">
                <div>

   
        '; //Cierro echo 
      
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
           
      
            //header('Location: muestreo_Concreto_Viajes_4.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9.'&t10='.$t10.'&t11='.$t11);
 
                            
        }
        echo '
        <div style="text-align:center; display: grid; align-items:center;">
                    <table border="2">
                   <BR> <h4> DATOS GENERALES INFORME</h4>
                   <BR>  <htbody>
                            <tr>
                                <th>ID_OBRA</th>
                                <th>ENSAYE</th>
                                <th>FECHA_PRUEBA</th>
                                <th>FECHA_INFORME</th>
                                <th>LABORATORISTA</th>
                                <th>JEFE_LABORATORIO</th>
                                <th>OBSERVACIONES</th>
                            </tr>
             </div>
        
        ';
        echo '<tr><td>'.$t1.'</td>';
        echo '<td>'.$t2.'</td>';
        echo '<td>'.$t3.'</td>';
        echo '<td>'.$t4.'</td>';
        echo '<td>'.$t5.'</td>';
        echo '<td>'.$t6.'</td>';
        echo '<td>'.$t7.'</td>';
        echo '</tr>';

        echo '          
                        </htbody>
                    </table>
                    <div style="text-align:center; display: grid; align-items:center;">
                        <table border="2">
                        <BR>  <h4> DATOS ELEMENTO COLADO </h4>
                        <BR><htbody>
                            <tr>
                                <th>ELEMENTO_COLADO</th>
                                <th>FC_PROYECTO</th>
                                <th>ADITIVO</th>
                                <th>CANTIDAD_EMPLEADA</th>
                                <th>FINALIDAD_ADITIVO</th>
                            </tr>
                
                </div> ';
            echo '<tr><td>'.$t8.'</td>';
            echo '<td>'.$t9.'</td>';
            echo '<td>'.$t10.'</td>';
            echo '<td>'.$t11.'</td>';
            echo '<td>'.$t12.'</td>';
            echo '</tr>';

        echo '
        </htbody>
                    </table>
        <div style="text-align:center; display: grid; align-items:center;">
                        <table border="2">
                        <BR>  <h4> DATOS CONCRETO </h4>
                        <BR><htbody>
                            <tr>
                                <th>E_ACOMODO_CON</th>
                                <th>TEMPERATURA</th>
                                <th>E_ACARREO_CON</th>
                                <th>TAM_MAX</th>
                                <th>TIPO_CONCRETO</th>
                                <th>TIPO_CEMENTO</th>
                                <th>INICIO_COLADO</th>
                                <th>FINAL_COLADO</th>
                                <th>REV_PYCT</th>
                                <th>CONCRETERA_UBIC</th>
                                
                            </tr>
                </div>';

            echo '<tr><td>'.$t13.'</td>';
            echo '<td>'.$t14.'</td>';
            echo '<td>'.$t15.'</td>';
            echo '<td>'.$t16.'</td>';
            echo '<td>'.$t17.'</td>';
            echo '<td>'.$t18.'</td>';
            echo '<td>'.$t19.'</td>';
            echo '<td>'.$t20.'</td>';
            echo '<td>'.$t21.'</td>';
            echo '<td>'.$t22.'</td>';
            echo '</tr>';


        echo '
                    
                    </htbody>
                    </table>
                    <p>
                    

                   <a href="muestreo_Concreto_Principal.php"> <input type="button" value="Regresar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: rgb(143,0,0);margin: 13px;width: 91px;"> 
                        </a>
                        </p>
                
                </div>
            </body>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
            </html>
        ';


}
    
?>