<!--Secion de Consulta-->
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
    } 
    
?>


<!DOCTYPE html>
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
                <form action="agregar-viaje.php" class="formulario" method="post">
                <h1 style="padding-bottom: 25px;">Datos Viaje Muestreo</h1>
                <!--Secion de Busqueda Separacion-->
                    <hr>
                    <h3 style="padding-bottom: 25px;">Buscar Viajes Existentes </h3>
                   
                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 70px;width: 190px;">Id_Muestreo_Con:</label>
                            <input type="text"
                            style="width: 550px;" Name="Id_Muestreo_Busqueda" id="Id_Muestreo_Busqueda"></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 70px;width: 190px;">Id_Obra:</label>
                            <input type="text"
                            style="width: 550px;" Name="Id_Obra_Busqueda" id="Id_Obra_Busqueda"></p>

                    <p>
                    <input type="submit" Value="Buscar" class="btn btn-primary" name="buscar" role="button"
                            style="font-weight: bold;background: #124177;color: rgb(255, 255, 255);margin: 13px;width: 91px;">
                    </p>
                
                <hr>
                    
                <h3 style="padding-bottom: 25px;">Agregar Nuevo Viaje </h3>

                    <p style="padding-bottom: 0px;"><label  style="padding-right: 11px;width: 190px;">Id_Obra:</label><input
                            type="text" style="width: 550px;" Name="id_Obra" value='<?php echo $t12; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 70px;width: 190px;">Id_Muestreo_Con:</label>
                            <input type="text"
                            style="width: 550px;" Name="Id_Muestreo" id="Id_Muestreo" value='<?php echo $t1; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 70px;width: 190px;">No_Viaje:</label>
                            <input type="number"
                            style="width: 550px;" Name="No_Viaje" id="No_Viaje" value='<?php echo $t2; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 11px;width: 190px;">Hora_Inicial:</label><input type="time"
                            style="width: 550px;" Name="V_H_Inicial" id="V_H_Inicial" value='<?php echo $t3; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 6px;width: 190px;">Hora_Final:</label><input type="time"
                            style="width: 550px;" Name="V_H_Final" id="V_H_Final" value='<?php echo $t4; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 190px;">No_Carro:</label><input type="text"
                            style="width: 550px;" Name="No_Carro" id="No_Carro" value='<?php echo $t5; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 190px;">No_Revisión:</label><input type="number"
                            style="width: 550px;" Name="No_Revision" id="No_Revision" value='<?php echo $t6; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 190px;">Revenimiento(CM):</label><input type="text"
                            style="width: 550px;" Name="Revenimiento"  id="Revenimiento" value='<?php echo $t7; ?>'></p>

                    <p style="padding-bottom: 0px;"><label 
                            style="padding-right: 62px;width: 190px;">Volumen(M^3):</label><input type="text"
                            style="width: 550px;" Name="Volumen" id="Volumen" value='<?php echo $t8; ?>'></p>

                    <p style="padding-bottom: 0px;"><label  style="padding-right: 62px;width: 190px;">No.
                            Provetas</label><input type="text" style="width: 550px;" Name="No_Provetas" id="No_Provetas" value='<?php echo $t9; ?>'></p>
                
                    <label style="padding-right: 62px;width: 190px;">Hora_Llegada:</label><input type="time"
                            style="width: 550px;" Name="Hora_Llegada" id="Hora_Llegada" value='<?php echo $t10; ?>'></p>
                    <p style="padding-bottom: 0px;"><label  style="padding-right: 62px;width: 190px;">
                            Observaciones</label>
                            <p><textarea
                            style="width: 550px;" name="Observaciones" rows="10" cols="50" value='<?php echo $t11; ?>'></textarea></p>
                    
                    
                    <p>
                    <input type="submit" Value="Guardar" name="guardar" class="btn btn-primary" 
                            style="font-weight: bold;background: rgb(10,126,29);margin: 13px;width: 91px;">

                    <a href="muestreo_Concreto_DGenerales.php"><input type="button" Value="Regresar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: #124177;color: rgb(255, 255, 255);margin: 13px;width: 91px;"></a>

                    <input type="button" value="Cancelar" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: rgb(143,0,0);margin: 13px;width: 91px;"> 
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