<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $id = (!empty ($_GET['t1']) ) ? $_GET['t1'] : NULL; 
    if ( $id ) {   
        $t1= $_GET['t1'];   
        $t2= $_GET['t2'];
        $t3= $_GET['t3'];
        $t4= $_GET['t4'];
        $t5= $_GET['t5'];
        $t6= $_GET['t6'];
        $t7= $_GET['t7'];
        $t8= $_GET['t8'];   
        $t9= $_GET['t9'];
        $t10= $_GET['t10'];
        $t11= $_GET['t11'];
        $t12= $_GET['t12'];
        $t13= $_GET['t13'];
        $t14= $_GET['t14'];
        $t15= $_GET['t15'];
        $t16= $_GET['t16'];
        $t17= $_GET['t17'];   
        $t18= $_GET['t18'];
        $t19= $_GET['t19'];
        $t20= $_GET['t20'];
        $t21= $_GET['t21'];
        $t22= $_GET['t22'];

    } else {
        $t1="";
        $t2="";
        $t3="";
        $t4="";
        $t5="";
        $t6="";
        $t7="";
        $t8=""; 
        $t9=""; 
        $t10=""; 
        $t11=""; 
        $t12=""; 
        $t13=""; 
        $t14=""; 
        $t15=""; 
        $t16=""; 
        $t17="";  
        $t18=""; 
        $t19=""; 
        $t20=""; 
        $t21=""; 
        $t22=""; 
    } 
    
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Muestreo Concreto</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="../index.php?action=inicio"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li class="sidebar-brand";> <a href="obra-index.php"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 20px;">Modulo Obras</a>
                <li> <a href="Presupuesto.php" style="color: rgb(255,255,255);font-size: 19px;">Presupuesto</a></li>
                <li> <a href="Obra.php" style="color: rgb(255,255,255);font-size: 19px;">Obra</a></li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestreo</a><a href="muestreo_concreto_DGenerales.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Nuevo Informe Muestreo</a>
                        <a href="muestreo_Concreto_Viajes_4.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Viajes
                        Muestreo</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias</a></li>
                
                <li> <a href="ingresos.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos</a><a href="ingresos_1.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Agregar</a>
                </li>
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
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                <form action= "agregar-informe-concreto.php" method="POST" class="formulario"> 
                    <h1 style="padding-bottom: 25px;">Informe de Muestreo de Concreto Hidr??ulico Fresco
                        N.CMT.2.02.005/04</h1>

                    <h2 style="padding-bottom: 25px;">Buscar Informe De Muestreo Existente</h2>
                    
                    <p style="padding-bottom: 0px;"><label  style="padding-right: 70px;">Id_Obra:</label><input
                            type="text" style="width: 550px;" Name="id_Obra_Busqueda"></p>

                    <p>
                    <input type="submit" value="Buscar" name="buscar" class="btn btn-primary" role="button" style="font-weight: bold;background: #124177;color: rgb(255, 255, 255);margin: 13px;width: 91px;">

                    <a href="muestreo_Concreto_DGenerales.php"><input type="button" value="Nuevo Informe" class="btn btn-primary" 
                    role="button" style="font-weight: bold;background: rgb(10,126,29);margin: 13px;width: auto;"></a>

                    </p>
                    </div>
                    </form>
                    <hr>

                    <?php
                        include ('conexionBD.php');
                        include('utilerias.php');
                        $conexion = conectar();
                        if (!$conexion){
                            redireccionar('ERROR DE CONEXION','muestreo_Concreto_Principal.php');
                            return;
                        }
                        $sql = "select IM.ID_OBRA,RO.NOMBRE, IM.FECHA_INFORME,IM.LABORATORISTA from informe_muestreo as IM, registro_obras as RO where (IM.ID_OBRA=RO.ID_OBRA);";
                        $resultado = mysqli_query($conexion,$sql);

                        echo '
                        
                        <div style="text-align:center; display: grid; align-items:center; margin:30px;">
                        <table border="2" action= "eliminar-muestreo-concreto.php" method="POST" class="formulario">
                       <BR> <h4> DATOS GENERALES INFORME</h4>
                       <BR>  <htbody>
                                <tr>
                                    <th>ID_OBRA</th>
                                    <th>NOMBRE</th>
                                    <th>FECHA_INFORME</th>
                                    <th>LABORATORISTA</th>
                                </tr>
                 </div>
            
            ';
                        while ($row = mysqli_fetch_array($resultado)) {
            
                            $t1 =  $row['ID_OBRA'];
                            $t2 = $row['NOMBRE'];
                            $t3 =  $row['FECHA_INFORME'];
                            $t4 =  $row['LABORATORISTA'];

             echo '<tr><td>'.$t1.'</td>';
             echo '<td>'.$t2.'</td>';
             echo '<td>'.$t3.'</td>';
             echo '<td>'.$t4.'</td>';
             //echo '<td> <input type="submit" value="Actualizar" name="actualizar" class="btn btn-primary" role="button" style="font-weight: bold;background: #124177;color: rgb(255, 255, 255);margin: 13px;width: 91px;"></td>';
            // echo '<td><input type="submit" value="Eliminar" name="borrar" class="btn btn-primary" role="button" style="font-weight: bold;background: rgb(143,0,0);width: 91px;margin: 13px;"></td>'; 
             echo '</tr>';
             echo '
             
             </div>
             </Form>
                </body>
                </html>
             ';
                        }
                        ?>
