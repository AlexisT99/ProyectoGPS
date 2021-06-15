<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }    
    $idn = (!empty ($_GET['s1']) ) ? $_GET['s1'] : NULL; 
    if ( $idn ) {                                                                                              #3
        $s1= $_GET['s1'];
    } else {
        $s1="";
    }
    $idf = (!empty ($_GET['t1']) ) ? $_GET['t1'] : NULL; 
    if ( $idf ) {                                                                                              #3
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
        $t23= $_GET['t23'];
        $t24= $_GET['t24'];
        $t25= $_GET['t25'];
        $t26= $_GET['t26'];
        $t27= $_GET['t27'];
        $t28= $_GET['t28'];
    } else {
        $t1=$s1;
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
        $t23="";
        $t24="";
        $t25="";
        $t26="";
        $t27="";
        $t28="";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Identificación</title>
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
                <li> <a href="Obra.pho" style="color: rgb(255,255,255);font-size: 19px;">Obras</a></li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestreo</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias</a>
                     <a href="resistencias_1.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Información</a>
                   <!-- <a href="resistencias_2.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Datos
                        previos</a>
                    <a href="resistencias_3.php"style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Datos
                        de la obra</a>
                    <a href="resistencias_4.php"style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Datos
                        del ensaye</a> !--> </li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button"
                    id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Módulo&nbsp;<small>Obras</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                    <form action="manejo_informe.php" method="post" >
                    <h1 style="padding-bottom: 25px;">Identificación</h1>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 62px;width: 101px;">Id Informe</label><input type="text" name="id_inf"
                            style="width: 455px;"value='<?php echo $t1; ?>' id="mytext">
                            <input type="submit" value="Llenar" name="verinforme" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                        </p>
                    <p style="padding-bottom: 0px;width: 700px;"><label style="padding-right: 69px;">Obra</label><input
                            type="text" name="nom_obra" style="width: 550px;"value='<?php echo $t2; ?>' ><label style="padding: 0px;padding-right: 8px;">Fecha
                            prueba</label><input type="date" name="fecha_prueb" style="width: 219px;"value='<?php echo $t25; ?>'><label
                            style="padding: 0px 0px 0px 6px;padding-right: 6px;">Fecha informe</label><input type="date" name="fecha_inf"
                            style="width: 219px;"value='<?php echo $t26; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 62px;width: 101px;">Ensaye No.</label><input type="text" name="num_ens"
                            style="width: 550px;"value='<?php echo $t3; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 68px;width: 101px;">Muestra No.</label><input type="text" name="muestra"
                            style="width: 550px;"value='<?php echo $t4; ?>'></p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 24px;">Tomada de</label><input
                            type="text" name="tomada" style="width: 550px;"value='<?php echo $t27; ?>'></p>
                    <hr style="height:1px;border:none;color:#124177;background-color:#124177;">
                    <h1 style="padding-bottom: 25px;">Datos previos</h1>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 62px;width: 101px;">Proporcion</label><input type="text" name="proporcion"
                            style="width: 550px;"value='<?php echo $t5; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 68px;width: 101px;">Revenimiento</label><input type="text" name="reve"
                            style="width: 550px;"value='<?php echo $t6; ?>'></p>
                    <p style="padding-bottom: 0px;"><label
                            style="padding: 0px;padding-right: 24px;width: 100px;">Adicionante</label><input type="text"
                            name="adi" style="width: 550px;"value='<?php echo $t7; ?>'></p>
                    <p style="padding-bottom: 0px;"><label
                            style="padding: 0px;padding-right: 24px;width: 100px;">Tipo</label><input type="text"
                            name="tipo_adi" style="width: 550px;"value='<?php echo $t8; ?>'></p>
                    <p style="padding-bottom: 0px;"><label
                            style="padding: 0px;padding-right: 24px;width: 100px;">Marca</label><input type="text"
                            name="marca_adi" style="width: 550px;"value='<?php echo $t9; ?>'></p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 24px;">Cantidad&nbsp;
                            &nbsp;</label><input type="text" name="cant_adi" style="width: 550px;"value='<?php echo $t10; ?>'></p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 24px;">Finalidad&nbsp;
                            &nbsp;</label><input type="text" name="fin_adi" style="width: 550px;"value='<?php echo $t11; ?>'></p>
                    <p class="text-nowrap" style="padding-bottom: 0px;"><label
                            style="padding-right: 24px;width: 103px;">Eq. Mezclado</label><input type="text"
                            name="eq_mez" style="width: 550px;"value='<?php echo $t12; ?>'></p>
                    <p class="text-nowrap" style="padding-bottom: 0px;"><label
                            style="padding-right: 24px;width: 103px;">Eq. Concreto&nbsp; &nbsp;</label><input
                            type="text" name="eq_aco" style="width: 550px;"value='<?php echo $t13; ?>'></p>
                    <hr style="height:1px;border:none;color:#124177;background-color:#124177;">
                    <h1 style="padding-bottom: 25px;">Datos del ensaye</h1>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 62px;width: 101px;">Diametro cm</label><input type="text"
                            name="diam" style="width: 550px;"value='<?php echo $t14; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 68px;width: 101px;">Sección cm2</label><input type="text"
                            name="secc" style="width: 550px;"value='<?php echo $t15; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Fecha colado</label><input type="date"
                            name="fecha_col" style="width: 550px;"value='<?php echo $t16; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Fecha ruptura</label><input type="date"
                            name="fecha_rup" style="width: 550px;"value='<?php echo $t17; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Edad, Días</label><input type="text"
                            name="edad" style="width: 550px;"value='<?php echo $t18; ?>'></p>
                    <hr style="height:1px;border:none;color:#124177;background-color:#124177;">
                    <h1 style="padding-bottom: 25px;">Datos del ensaye</h1>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 68px;width: 101px;">Proc. curado</label><input type="text"
                            name="proc_cur"style="width: 550px;"value='<?php echo $t19; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Carga ruptura</label><input type="text"
                            name="carga" style="width: 550px;"value='<?php echo $t20; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Resistencia</label><input type="text"
                            name="res" style="width: 550px;"value='<?php echo $t21; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">% resistencia</label><input type="text"
                            name="res_proy" style="width: 550px;"value='<?php echo $t22; ?>'></p>
                    <hr style="height:1px;border:none;color:#124177;background-color:#124177;">
                    <p style="padding-bottom: 0px;width: 400px;"><label
                            style="padding-right: 2px;">Laboratorista</label><input type="text"
                            name="labor" style="width: 650px;"value='<?php echo $t23; ?>'><label style="padding-right: 5px;">Jefe de laboratorio</label><input
                            type="text" name="jefe_lab" style="width: 650px;"value='<?php echo $t24; ?>'></p>
                    <p style="padding-bottom: 0px;width: 400px;"><label
                            style="padding-right: 75px;">Observaciones</label><input type="text"
                            name="observaciones" style="width: 650px;height: 100px;"value='<?php echo $t28; ?>'></p>
                    <p class="text-right" style="width: 650px;">
                    <input type="submit" value="Guardar" name="guardar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                    <input type="submit" value="Actualizar" name="actualizar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 110px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                            <a href="resistencias.php" class="btn btn-primary" role="button"
                            style="font-weight: bold;background: rgb(143,0,0);width: 91px;">Cancelar</a></p>
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