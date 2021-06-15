<?php
    include ('conexionBD.php');
    include('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','muestreo_Concreto_Viajes_4.php');
        return;
    }

    //Fucnion de insercion de datos a tabla Viajes
    if (isset($_POST["guardar"])) { 
       
        $Id_Muestreo = $_POST['Id_Muestreo'];
        $Id_Obra = $_POST['id_Obra'];
        $NoViaje = $_POST['No_Viaje'];
        $VH_Inicial = $_POST['V_H_Inicial'];
        $VH_Final = $_POST['V_H_Final'];
        $NoCarro = $_POST['No_Carro'];
        $NoRevision = $_POST['No_Revision'];
        $Revenim = $_POST['Revenimiento'];
        $Vol = $_POST['Volumen'];
        $NoProvetas = $_POST['No_Provetas'];
        $HoraLlegada = $_POST['Hora_Llegada'];
        $Obs = $_POST['Observaciones'];
        
    
        $sql1 = "insert into viaje_informe_muestreo(ID_INFORME_MUESTREO) values ('$Id_Muestreo')";
        $resultado1 = mysqli_query($conexion,$sql1);
        
        $sql = "insert into viajes(ID_INFORME_MUESTREO,ID_OBRA,NO_VIAJE,NO_CARRO, NO_REVISION, VOLUMEN, HORA_SALIDA_VIAJE, 
        HORA_LLEGADA_VIAJE, HORA_INICIAL_VIAJE,	HORA_FINAL_VIAJE,	REVENIMIENTO,	
        NO_PROVETAS, OBSERVACIONES) values ('$Id_Muestreo','$Id_Obra','$NoViaje','$NoCarro','$NoRevision','$Vol', '$VH_Inicial','$HoraLlegada',
        '$VH_Inicial', '$VH_Final','$Revenim','$NoProvetas','$Obs')";
        
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha agregado exitosamente','muestreo_Concreto_Viajes_4.php');

    }
    //************************************************************FUNCION DE CONSULTA*****************************  */
    if (isset($_POST["buscar"])) { 
        $Id_Muestreo_Busqueda= $_POST['Id_Muestreo_Busqueda'];
        $Id_Obra_Busqueda= $_POST['Id_Obra_Busqueda'];
        $sql = "select * from viajes where ID_INFORME_MUESTREO='$Id_Muestreo_Busqueda' or ID_OBRA='$Id_Obra_Busqueda';";
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
            <div style="text-align:center;">
                    <table border="2">
                        <htbody>
                            <tr>
                                <th>ID_INFORME</th>
                                <th>ID_OBRA</th>
                                <th>NO_VIAJE</th>
                                <th>HORA_INICIAL</th>
                                <th>HORA_FINAL</th>
                                <th>NO_CARRO</th>
                                <th>NO_REVISION</th>
                                <th>REVENIMIENTO</th>
                                <th>VOLUMEN</th>
                                <th>NO_PROVETAS</th>
                                <th>HORA_LLEGADA</th>
                                <th>OBSERVACIONES</th>
                            </tr>
                </div>
                </div>
                <div>

   
        '; //Cierro echo 
      
        while ($row = mysqli_fetch_array($resultado)) {
            
            $t1 =  $row['ID_INFORME_MUESTREO'];
            $t2 =  $row['NO_VIAJE'];
            $t3 =  $row['HORA_INICIAL_VIAJE'];
            $t4 =  $row['HORA_FINAL_VIAJE'];
            $t5 =  $row['NO_CARRO'];
            $t6 =  $row['NO_REVISION'];
            $t7 =  $row['REVENIMIENTO'];
            $t8 =  $row['VOLUMEN'];
            $t9 =  $row['NO_PROVETAS'];
            $t10 =  $row['HORA_LLEGADA_VIAJE'];
            $t11 =  $row['OBSERVACIONES'];
            $t12 =  $row['ID_OBRA'];
            //header('Location: muestreo_Concreto_Viajes_4.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9.'&t10='.$t10.'&t11='.$t11);

            echo '<tr><td>'.$t1.'</td>';
            echo '<td>'.$t12.'</td>';
            echo '<td>'.$t2.'</td>';
            echo '<td>'.$t3.'</td>';
            echo '<td>'.$t4.'</td>';
            echo '<td>'.$t5.'</td>';
            echo '<td>'.$t6.'</td>';
            echo '<td>'.$t7.'</td>';
            echo '<td>'.$t8.'</td>'; 
            echo '<td>'.$t9.'</td>';
            echo '<td>'.$t10.'</td>';
            echo '<td>'.$t11.'</td>'; 
            echo '</tr>';
                            
        }
        echo '          
                        </htbody>
                    </table>
                    <p>
                    

                   <a href="muestreo_Concreto_Viajes_4.php"> <input type="button" value="Regresar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: rgb(143,0,0);margin: 13px;width: 91px;"> 
                        </a>
                        </p>
                </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
            </body>
            </html>
        ';

    }
    
    ?>