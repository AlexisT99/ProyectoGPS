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
        $t5= $_GET['t5'];
        $t6= $_GET['t6'];
        $t7= $_GET['t7'];

    } else {
        $t1="";
        $t2="";
        $t3="";
        $t4="";
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
        $t5="";
        $t6="";
        $t7="";
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
                <li> </li>
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
    
                <form action= "buscar-informe-v2.php" method="POST" class="formulario"> 
                <h1 style="padding-bottom: 25px;text-align:center;">Ingresar Nuevo Informe De Muestreo </h1>
                    <hr>
                    <h2 style="padding-bottom: 25px;">Datos Generales Informe </h2>
                    <p style="padding-bottom: 0px;"><label  style="padding-right: 11px;width: 210px;">Id_Obra:</label><input
                            type="text" style="width: 550px;" Name="id_Obra" value='<?php echo $t1; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 11px;width: 210px;">Ensaye:</label><input type="number"
                            style="width: 550px;"Name="Ensaye" value='<?php echo $t2; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 6px;width: 210px;">Fecha_Prueba:</label><input type="date"
                            style="width: 550px;" Name="fecha_Prueba" value='<?php echo $t3; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Fecha_Informe:</label><input type="date"
                            style="width: 550px;"Name="fecha_Informe" value='<?php echo $t4; ?>'></p>

                    <hr>
                    <h2 style="padding-bottom: 25px; aling-text:center">Muestreo N.CMT.2.02.005/04&nbsp;</h2>
                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 70px;width: 210px;">Elemento_Colado:</label><input type="text"
                            style="width: 550px;"Name="E_Colado" value='<?php echo $t8; ?>'></p>

                    <p style="padding-bottom: 0px;"><label  style="padding-right: 11px;width: 210px;">F´C
                            Colado (KG/CM^2):</label><input type="number" style="width: 550px;" Name="Fc_Colado" value='<?php echo $t9; ?>'> </p>

                    <p style="padding-bottom: 0px;"><label style="padding-right: 6px;width: 210px;">Aditivo
                            Empleado:</label><input type="text" style="width: 550px;" Name="Aditivo" value='<?php echo $t10; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Cantidad_Empleada:</label><input type="text"
                            style="width: 550px;" Name="Cantidad" value='<?php echo $t11; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Finalidad_Aditivo:</label><input type="text"
                            style="width: 550px;" Name="Fin_Aditivo" value='<?php echo $t12; ?>'></p>

                    <hr>
                    <h2 style="padding-bottom: 25px;">Muestreo Concreto</h2>
                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 70px;width: 210px;">E_Acomodar_Concreto:</label><input type="text"
                            style="width: 550px;" Name="E_A_Concreto"value='<?php echo $t13; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 11px;width: 210px;">Temperatura (*C):</label><input type="number"
                            style="width: 550px;" Name="Temperatura" value='<?php echo $t14; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 6px;width: 210px;">E_Acarreo_Concreto:</label><input type="text"
                            style="width: 550px;" Name="Acarreo" value='<?php echo $t15; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Tamaño_Maximo (MM):</label><input type="text"
                            style="width: 550px;" Name="Tamaño" value='<?php echo $t16; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Tipo Concreto:</label><input type="text"
                            style="width: 550px;" Name="Tipo_Concreco" value='<?php echo $t17; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Tipo Cemento:</label><input type="text"
                            style="width: 550px;" Name="Tipo_Cemento" value='<?php echo $t18; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">H_Inicio_Colado:</label><input type="time"
                            style="width: 550px;" Name="H_Inicio" value='<?php echo $t19; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">H_Fin_Colado:</label><input type="time"
                            style="width: 550px;" Name="H_Final" value='<?php echo $t20; ?>'></p>

                    <p style="padding-bottom: 0px;"><label  style="padding-right: 62px;width: 210px;">Rev. Proyecto
                            (CM)</label><input type="text" style="width: 550px;" Name= "Rev" value='<?php echo $t21; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Emp_Concretera_Ubic:</label><input type="text"
                            style="width: 550px;" Name="Concretera_Ubic" value='<?php echo $t22; ?>'></p>
                    
                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Laboratorista:</label><input type="text"
                            style="width: 550px;" name="Laboratorista" value='<?php echo $t5; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 210px;">Jefe Lab (Firma):</label><input type="text"
                            style="width: 550px;" name="Lab_Firma" value='<?php echo $t6; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 2100px;">Observaciones:</label></p>
                            <p><textarea
                            style="width: 550px;" name="Observa" rows="10" cols="50"><?php echo $t7;?></textarea></p>
                    
                    <p>
                    <input type="submit" Value="Actualizar" name="actualizar" class="btn btn-primary" 
                            style="font-weight: bold;background: rgb(10,126,29);margin: 13px;width: 100px;">
                       
                    <input type="submit"  Value="Eliminar"  name= "borrar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: rgb(143,0,0);margin: 13px;width: 91px;">

                        <a href="muestreo_Concreto_Principal.php"><input type="button" Value="Regresar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: #124177;color: rgb(255, 255, 255);margin: 13px;width: 91px;"></a>
                       
                        <a><input type="button" value="Cancelar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: rgb(143,0,0);width: 91px; margin: 13px;"></a>
                        </p>

                </form>
                </div>
                <footer>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 footer-navigation">
                            <h3><a href="#">Company<span>logo </span></a></h3>
                            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> ·
                                </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> ·
                                </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                            <p class="company-name">Company Name © 2015 </p>
                        </div>
                        <div class="col-sm-6 col-md-4 footer-contacts">
                            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                                <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                            </div>
                            <div><i class="fa fa-phone footer-contacts-icon"></i>
                                <p class="footer-center-info email text-left"> +1 555 123456</p>
                            </div>
                            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                                <p> <a href="#" target="_blank">support@company.com</a></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4 footer-about">
                            <h4>About the company</h4>
                            <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit,
                                eu auctor lacus vehicula sit amet. </p>
                            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a
                                    href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                        class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>