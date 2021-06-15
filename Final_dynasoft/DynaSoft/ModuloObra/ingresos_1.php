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
    } else {
        $t1=$s1;
        $t2="";
        $t3="";
        $t4="";
        $t5="";
        $t6="";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar ingreso</title>
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
                <li> <a href="Obra.php" style="color: rgb(255,255,255);font-size: 19px;">Obras</a></li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos a obras</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestras</a></li>
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
                            <h1 style="color: rgb(255,255,255);">Módulo&nbsp;<small>Obras</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                <form action="manejo_ingresos.php" method="post" >
                    <h1 style="padding-bottom: 25px;">Informe de resistencias</h1>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 62px;width: 101px;">IdIngreso</label><input type="text" name="id_ing"
                            style="width: 455px;"value='<?php echo $t1; ?>' id="mytext">
                            <input type="submit" value="Llenar" name="veringreso" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;height: 38px;">    
                    </p>
                            
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 68px;width: 101px;">IdObra</label><input type="text" name="nom_obra"
                            style="width: 550px;"value='<?php echo $t2; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">IdTrabajador</label><input type="text" name="trabajador"
                            style="width: 550px;"value='<?php echo $t3; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Monto</label><input type="text" name="monto"
                            style="width: 550px;"value='<?php echo $t4; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Fecha</label><input type="date" name="fecha"
                            style="width: 550px;"value='<?php echo $t5; ?>'></p>
                    <p style="padding-bottom: 0px;"><label class="text-nowrap"
                            style="padding-right: 24px;width: 103px;">Descripción</label><input type="text" name="descripcion"
                            style="width: 550px;"value='<?php echo $t6; ?>'></p>
                    <p style="text-align: right;height: 65px;width: 660px;">
                        <input type="submit" value="Guardar" name="guardar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                        <input type="submit" value="Actualizar" name="actualizar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 110px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                        <a href="resistencias.php" class="btn btn-primary" role="button"
                        style="font-weight: bold;background: rgb(143,0,0);width: 91px;">Cancelar</a></p>
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