<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $id = (!empty ($_GET['t1']) ) ? $_GET['t1'] : NULL; 
    if ( $id ) {            
        $op1=$op2=$op3=$op4=$op5=$op6=$op7="";
        $t1= $_GET['t1'];
        $t2= $_GET['t2'];
        $t3= $_GET['t3'];
        $t4= $_GET['t4'];

        $t5= $_GET['t5'];
        if($t5=="Muestreo"){ $op1='selected';}
        if($t5=="Análisis"){ $op2='selected';}
        if($t5=="Reporte"){  $op3='selected';}
        if($t5=="Nucleo"){   $op4='selected';}
        if($t5=="Muestra"){  $op5='selected';}
        if($t5=="km"){       $op6='selected';}
        if($t5=="Informe"){  $op7='selected';}

        $t6= $_GET['t6'];
        $t7= $_GET['t7'];
        $t8= $_GET['t8'];
        $t9= $_GET['t9'];
        $t10=$_GET['t10'];;
        $t11=$_GET['t11'];;
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
        $op1=$op2=$op3=$op4=$op5=$op6=$op7="";
    }

    
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar_Presupuesto</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <!-- Start: Sidebar Menu -->
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
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestreo</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias&nbsp;</a></li>
                
                <li> <a href="ingresos.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button"
                    id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Presupuesto</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                

                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                <form action="agregar-manejo.php" class="formulario" method="post"  >
                    <h1 style="padding-bottom: 25px;">Agregar Presupuesto</h1>
                    
                    <p style="padding-bottom: 0px;"><label style="padding-right: 19px;" >Id Presup.:</label><input
                            type="text" id="Pre_P" type="hidden" Name="Pre_P" style="width: 550px;" value='<?php echo $t1; ?>'></p>
                

                   
  
                    <p style="padding-bottom: 0px;"><label style="padding-right: 25px;">Numero:</label>
                    <input type="text" id="Num_P" Name="Num_p" style="width: 550px;" value='<?php echo $t2; ?>'></p>


                    <p style="padding-bottom: 0px;"><label style="padding-right: 35px;">Cliente:</label>
                    <input type="text" id="Cliente" Name="Cliente" style="width: 550px;" value='<?php echo $t10; ?>'></p>

                    <p style="padding-bottom: 0px;"><label style="padding-right: 25px;">Quien Realiza:</label>
                    <input type="text" id="Quien" Name="Quien" style="width: 515px;" value='<?php echo $t11; ?>'></p>

                   
                    <p style="padding-bottom: 0px;"><label style="padding-right: 40px;">Norma:</label><input type="text"
                           id="Nor_P" name="Nor_P" style="width: 550px;" value='<?php echo $t3; ?>'></p>
                          
                    <p style="padding-bottom: 0px;"><label style="padding-right:20px;">Concepto:</label><input
                       type="text" id="Con_P"  Name="Con_P" style="width: 550px;height: 70px;" value='<?php echo $t4; ?>'></p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 33px;">Unidad:</label>
                    
                    <select name="Uni_P" >
                        <option <?php echo $op1; ?>>Muestreo</option>
                        <option <?php echo $op2; ?>>Análisis</option>
                        <option <?php echo $op3; ?>>Reporte</option>
                        <option <?php echo $op4; ?>>Nucleo</option>
                        <option <?php echo $op5; ?>>Muestra</option>
                        <option <?php echo $op6; ?>>km</option>
                        <option <?php echo $op7; ?>>Informe</option>
                    </select>



                   <!-- <input
                            type="select" id="Uni_P" name="Uni_P" style="width: 550px;" value='<?php echo $t5; ?>'>
                            -->

                    </p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 21px;">Cantidad:</label>
                    
                    <input
                            type="text" id="Can_P" name="Can_P" style="width: 550px;" value='<?php echo $t6; ?>'></p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 63px;">P.U.:</label><input type="text"
                            id="Pu_P" name="Pu_P" style="width: 550px;" value='<?php echo $t7; ?>'></p>
                    <!--
                    <p style="padding-bottom: 0px;"><label style="padding-right: 33px;">Importe:</label><input
                            type="text" id="Imp_P" name="Imp_P" style="width: 550px;" value='<?php echo $t8; ?>'></p>
                    <p style="padding-bottom: 0px;"><label style="padding-right: 57px;">Total:</label><input
                            type="text" id="Tot_P" name="Tot_P" style="width: 150px;" value='<?php echo $t9; ?>'></p>
                    -->
                    
                    <p>
                    <!--<a  class="btn btn-primary" role="button" id="Agregar_P" href="agregar-manejo.php" method="post"
                            style="font-weight: bold;background: rgb(10,126,29);margin: 13px;width: 91px;">Agregar</a>-->
                            <input type="submit" value="Guardar" name="guardar" class="boton" style="font-weight: bold
                            ;background: rgb(10,126,29);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                            
                            <input type="submit" value="Actualizar" name="actualizar" class="boton" style="font-weight: bold
                            ;background: rgb(10,126,29);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                            
                            <input type="submit" value="Borrar" name="borrar" class="boton" style="font-weight: bold
                            ;background: rgb(146,0,0);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">

                            <input type="submit" value="Limpiar" name="limpiar" class="boton" style="font-weight: bold
                            ;background: rgb(146,0,0);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                            </p>
                            </form>
                            <hr size="20px" color="black">

                            <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                    <h1 style="padding-bottom: 25px;">Buscar Presupuesto</h1>
                    <form action="presupuesto_consulta.php" method="post" >
                        <!--<p style="padding-bottom: 0px;"><label style="padding-right: 30px;">Nombre Obra:</label><input
                                type="text" style="width: 550px;"></p>
                        <p style="padding-bottom: 0px;"><label style="padding-right: 53px;">Lider Obra:</label><input
                                type="text" style="width: 550px;"></p>
                        <p style="padding-bottom: 0px;"><label style="padding-right: 95px;">Area:</label><input type="text"
                                style="width: 550px;"></p>
                                -->
                        <p style="padding-bottom: 0px;"><label style="padding-right: 10px;">Numero:</label><input
                        id ="NumLici" name="numLici" type="text" style="width: 550px;"></p>
                        <input type="submit" value="Buscar" id="Buscar" name="buscar" class="boton" style="font-weight: bold
                            ;background: rgb(10,126,29);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                        
                         

                    </form>     
                </div>
                </div><!-- Start: Pretty Footer -->
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
                </footer><!-- End: Pretty Footer -->
            </div>
        </div>
    </div><!-- End: Sidebar Menu -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>