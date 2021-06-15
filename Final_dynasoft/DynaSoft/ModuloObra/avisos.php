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
                <li class="sidebar-brand"> <a href="#"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li> <a href="Presupuesto.php" style="color: rgb(255,255,255);font-size: 19px;">Presupuesto</a></li>
                <li> <a href="Obra.php" style="color: rgb(255,255,255);font-size: 19px;">Obra</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestreo</a><a href="muestreo_concreto_DGenerales.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Nuevo Informe Muestreo</a>
                        <a href="muestreo_Concreto_Viajes_4.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Viajes
                        Muestreo</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias</a></li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="ingresos.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos</a><a href="ingresos_1.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Agregar</a>
                </li>
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
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                <form action= "agregar-informe-concreto.php" method="POST" class="formulario"> 

                    </div>
                    </form>

                    <?php
                        include ('conexionBD.php');
                        include('utilerias.php');
                        $conexion = conectar();
                        if (!$conexion){
                            redireccionar('ERROR DE CONEXION','muestreo_Concreto_Principal.php');
                            return;
                        }
                      
                        $sql = "select ID_INCIDENTE,RO.NOMBRE,FECHA_INCIDENTE,DESCRIPCION_INCIDENTE,ESTADO_PETICION,ID_EQUIPO,ID_MATERIAL from incidentes, registro_obras as RO where ESTADO_PETICION='PENDIENTE'";
                        $resultado = mysqli_query($conexion,$sql);

                        echo '
                        
                        <div style="text-align:center; display: grid; align-items:center; margin:30px;">
                        <table border="2" id="tablaIncidentes" action= "eliminar-muestreo-concreto.php" method="POST" class="formulario">
                       <BR> <h1 style="padding-bottom: 25px; color:red; ">Notificaciones de Incidentes</h1>
                       <BR>  <htbody>
                                <tr>
                                    <th>ID ICIDENTE</th>
                                    <th>NOMBRE OBRA</th>
                                    <th>FECHA INCIDENTE</th>
                                    <th>DESCRIPCION</th>
                                    <th>ID EQUIPO AFECTADO</th>
                                    <th>ID MATERIAL AFECTADO</th>
                                    <th>ESTADO PETICION</th>
                                    <th>APROBACION</th>
                                </tr>
                 </div>
            
            ';
                        while ($row = mysqli_fetch_array($resultado)) {
            
                            $t1 =  $row['ID_INCIDENTE'];
                            $t2 =  $row['NOMBRE'];
                            $t3 =  $row['FECHA_INCIDENTE'];
                            $t4 =  $row['DESCRIPCION_INCIDENTE'];
                            $t6 = $row['ID_EQUIPO'];
                            $t7 = $row['ID_MATERIAL'];
                            $t5 =  $row['ESTADO_PETICION'];
                            

             echo '<tr><td>'.$t1.'</td>';
             echo '<td>'.$t2.'</td>';
             echo '<td>'.$t3.'</td>';
             echo '<td>'.$t4.'</td>';
             echo '<td>'.$t6.'</td>';
             echo '<td>'.$t7.'</td>';
             echo '<td>'.$t5.'</td>';
             echo '<td> <input type="submit" onclick="cambiarEstado()"; value="Autorizar" name="actualizar" class="btn btn-primary" role="button" style="font-weight: bold;background: #124177;color: rgb(255, 255, 255);margin: 5px;width: 91px;"></td>';
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
                        <script >
                                function cambiarEstado(){
                                    if (!document.getElementsByTagName || !document.createTextNode) return;
                                    var rows = document.getElementById('tablaIncidentes').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                                    for (i = 0; i < rows.length; i++) {
                                      
                                      rows[i].onclick = function() {
                                         var $t1 = this.getElementsByTagName('td')[0].innerHTML;
                                         
                                         
                                    //alert((this.rowIndex + 1)+result); 
                                    location.href ="agregar-manejo_avisos.php?t1="+$t1;
                                    //header('Location: index.php?t1=');  
                            }
                            }
                                }//funcion
                            </script>
