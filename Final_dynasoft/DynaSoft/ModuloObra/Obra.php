<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Obra</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="enviar.js"></script>
</head>

<body>
    <?php 
      
      $buscar = (!empty ($_POST['txtBuscar']) ) ? $_POST['txtBuscar'] : NULL;
       IF($buscar){ 
        $buscar=$_POST['txtBuscar'];
       }
       else{
           $buscar="";
       }
    
    $id = (!empty ($_GET['t1']) ) ? $_GET['t1'] : NULL;
    IF ($id){
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
    }else{
        
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
    }
    ?>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="../index.php?action=inicio"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                        <li class="sidebar-brand";> <a href="obra-index.php"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 20px;">Modulo Obras</a>
                <li> <a href="Presupuesto.php" style="color: rgb(255,255,255);font-size: 19px;">Presupuesto</a></li>
                <li> <a href="Obra.php" style="color: rgb(255,255,255);font-size: 19px;">Obra</a><a href="Obra.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Obras</a>
                </li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestreo</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias</a></li>
                <li> <a href="ingresos.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos</a>
                
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button"
                    id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Obras</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                    <h1 style="padding-bottom: 25px;width: 700px;font-size: 33px;">Registrar obra</h1>
                    <p></p>
                    <form action="funcionesObra.php" method="post" >
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 70px;font-size: 14px;width: 150.4px;">Id Obra:</label><input required
                                type="text" value="<?php echo $t1; ?>" style="width: 413px;height: 25px;" name="txtId"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 70px;font-size: 14px;width: 150.4px;">Nombre:</label><input required
                                type="text" value="<?php echo $t2; ?>" style="width: 413px;height: 25px;" name="txtNombre"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 11px;width: 150.4px;font-size: 14px;">Encargado:</label><input required
                                type="text" value="<?php echo $t3; ?>" style="width: 413px;height: 25px;" name="txtEncargado"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 6px;width: 150.4px;font-size: 14px;">Contratista:</label><input required
                                type="text" value="<?php echo $t5; ?>" style="width: 413px;height: 25px;" name="txtContratista"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 62px;width: 150.4px;height: 70px;font-size: 14px;">Teléfono del
                                <br>contratista:</label><input type="text" value="<?php echo $t6; ?>" style="width: 300px;height: 36px;"
                                name="txtTelContra"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 68px;width: 150.4px;font-size: 14px;">Lugar:</label><input
                                type="text" value="<?php echo $t7; ?>" style="width: 413px;height: 25px;" name="txtLugar"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 24px;font-size: 14px;width: 150.4px;">Fecha de
                                inicio:</label><input type="date" value="<?php echo $t8; ?>" style="width: 413px;height: 25px;" name="txtFechaIni">
                        </p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 2px;width: 150.4px;font-size: 14px;">Fecha de fin:</label><input
                                type="date" value="<?php echo $t9; ?>" style="width: 413px;height: 25px;" name="txtFechaFin"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 5px;width: 150.4px;font-size: 14px;">Costo:</label><input required
                                type="number" value="<?php echo $t11; ?>" style="width: 413px;height: 25px;" name="txtCosto"></p>
                        <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 75px;width: 150.4px;font-size: 14px;">Estado:</label><input required
                                type="text" value="<?php echo $t10; ?>" style="width: 413px;height: 25px;" name="txtEstado"></p>
                                <p style="padding-bottom: 0px;width: 646px;"><label
                                style="padding-right: 75px;width: 150.4px;font-size: 14px;">Descripcion:</label><input
                                type="text" value="<?php echo $t4; ?>" style="width: 413px;height: 25px;" name="txtDescripcion"></p>
                        <p><!--<a class="btn btn-primary" role="button"
                                style="font-weight: bold;background: rgb(10,126,29);margin: 13px;width: 91px;">Guardar</a><a
                                class="btn btn-primary" role="button"
                                style="font-weight: bold;background: rgb(143,0,0);width: 91px;">Cancelar</a>-->
                                <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary" style="font-weight: bold
                                ;background: rgb(10,126,29);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                                <a href="Obra.php"><input type="button" value="Cancelar" name="Cancelar" class="btn btn-primary" style="font-weight: bold
                                ;background: rgb(146,0,0);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px" ></a>
                                <input type="submit" value="Actualizar" name="Actualizar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 110px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                        </p>
                    </form>
                </div>
                <hr style="min-width: 2px;color: rgb(0,0,0);background: var(--dark);">
                
                <form action="Obra.php" method="post" >
                <p><label></label><input type="text" style="margin-left: 14px;" name="txtBuscar" value="<?php echo $buscar ?>">
                <input type="submit" value="Buscar" name="Buscar" class="btn btn-primary" style="font-weight: bold
                                ;background: rgb(146,0,0);margin: 13px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px" >
                </form>

                <div class="table-responsive" style="border-color: rgb(6,6,6);border-top-width: 0px;">
                
                <form action="javascript:void(0)" method="post" >
                <table class="table" id="tblObras">
                        <thead>
                            <tr>
                                <th style="width: 112px;">Id</th>
                                <th style="width: 229px;">Nombre de obra</th>
                                <th style="width: 186px;">Encargado</th>
                                <th style="width: 176px;">Lugar</th>
                                <th style="width: 148px;">Estado</th>
                                <th style="width: 135px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpo">
                            <?php
                                include ('conexionBD.php');
                                $conexion = conectar();
                                $sql="SELECT Id_Obra,Nombre,idTrabajador,Lugar_Desarrollo,Status_Obra FROM `Registro_Obras` WHERE Nombre LIKE '%$buscar%' OR Id_Obra LIKE '$buscar%'";
                                $result = mysqli_query($conexion,$sql);

                                
                                while($mostrar=mysqli_fetch_array($result)){
                                    
                            ?>
                                <tr>
                                    <td><?php echo $mostrar['Id_Obra']; ?> </td>
                                    <td><?php echo $mostrar['Nombre']; ?> </td>
                                    <td><?php echo $mostrar['idTrabajador'];?></td>
                                    <td><?php echo $mostrar['Lugar_Desarrollo'];?></td>
                                    <td><?php echo $mostrar['Status_Obra'];?></td>
                                    <td>
                                        <input type="submit" onclick="myFunction()" value="Eliminar" name="Eliminar" class="btn btn-primary" style="font-weight: bold;background: var(--white);width: 91px;color: rgb(18,65,119);border-color: rgb(18,65,119);">
                                         </form>
                                        <form action="javascript:void(0)" method="post" >
                                        <input type="submit" onclick="myFunction1()" value="Editar" name="Editar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                                        </form>
                                    </td>
                                <tr>

                            <?php
                                }
                                mysqli_close($conexion); 
                            ?>
                        </tbody>
                    </table>
                                  
                    <!--<script> var variableJS = "contenido de la variable javascript"; </script>
                    <?php 
                            $nueva = "<script> document.write(variableJS) </script>";
                            echo $nueva;
                    ?>-->

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
    <script src="assets/js/Sidebar-Menu.js"></script>

    
   
</body>

</html>