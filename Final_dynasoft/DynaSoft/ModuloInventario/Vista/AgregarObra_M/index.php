<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar_Obras_M</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
            <li class="sidebar-brand"> <a href="../../../index.php?action=inicio" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li> <a href="../InterfazInventario_Equipo/index.php" style="color: rgb(255,255,255);font-size: 19px;">Inventario</a></li>
                <li> <a href="../AgregarEquipo/index.php" style="color: rgb(255,255,255);font-size: 19px;">Agregar</a><a href="../AgregarMaterial/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Material</a><a href="../AgregarEquipo/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Equipo</a><a href="../AgregarMantenimiento/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Mantenimiento/Seguro</a></li>
                <li> <a href="../AgregarObra_M/index.php" style="color: rgb(255,255,255);font-size: 19px;">Obras Material</a></li>
                <li> </li>
                <li> <a href="../AgregarObra_E/index.php" style="color: rgb(255,255,255);font-size: 19px;">Obras Equipo</a></li>
                <li> </li>
                <li> <a href="../ValidarSolicitud/index.php" style="color: rgb(255,255,255);font-size: 19px;">Solicitud Incidentes</a></li>
                <li> </li>
                <li class="sidebar-brand" style="margin-top: 100px;"> 
                <a href="../../../index.php?action=iniModNom" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;">Ir a Nomina</a>
                <a href="../../../ModuloObra/obra-index.php" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;margin-top: -25px;">Ir a Obra</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 id="lblTitulo" style="color: rgb(255,255,255);margin-bottom: 0px;">Modulo&nbsp;<small>Inventario</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 120px;padding-bottom: 120px;display: flex;">
                    <main>
                        <div style="display: flex;">
                            <div style="display: flex;width: 200px;">
                            <form action = "../../Modulo/php/InterfazAgregarObraM.php" method = "POST">
                                    <div><label>Id Obra</label>
                                                            <select class="form-control" id="txtidObra" name="txtidObra">
                                                                <option value = "" selected=""></option>
                                                                <?php
                                                                    $conexion = mysqli_connect("localhost","root","",'dynasoft');
                                                                    $query = "SELECT ID_OBRA FROM registro_obras";
                                                                    $datos = mysqli_query($conexion,$query);//$conexion->query($query);
                                                                    if($datos->num_rows>0){
                                                                        while($fila=$datos->fetch_assoc()){
                                                                            $id_obra = $fila['ID_OBRA'];
                                                                ?> 
                                                                           <option value = "<?php echo $id_obra ?>"><?php echo $id_obra ?></option>
                                                                <?php               
                                                                        }//fin while
                                                                    }//fin if
                                                                ?>
                                                            </select>
                                    </div>
                                    <div><label id="lblCodigo-1">Codigo Material</label><input class="form-control" required type="text" id="txtCodigo" style="margin-top: 10px;" name="txtCodigo"></div>
                                    <div><label>Nombre Trabajador</label>
                                                            <select class="form-control" id="txtTrabajo" name="txtTrabajo">
                                                                <option value = "" selected=""></option>
                                                                <?php
                                                                    $conexion = mysqli_connect("localhost","root","",'dynasoft');
                                                                    $query = "SELECT IDTRABAJADOR,CONCAT_ws(' ',NOMBRETRAB,APEPATTRAB,APEMATTRAB) AS TRABAJADOR FROM `trabajadores`";
                                                                    $datos = mysqli_query($conexion,$query);//$conexion->query($query);
                                                                    if($datos->num_rows>0){
                                                                        while($fila=$datos->fetch_assoc()){
                                                                            $id_trabajador = $fila['IDTRABAJADOR'];
                                                                            $nombre_trabajador = $fila['TRABAJADOR'];
                                                                           
                                                                ?> 
                                                                           <option value = "<?php echo $id_trabajador ?>"><?php echo $nombre_trabajador ?></option>
                                                                <?php               
                                                                        }//fin while
                                                                    }//fin if
                                                                ?>
                                                            </select>
                                    </div>
                                    <div><label>Cantidad</label><input class="form-control" required type="text" id="txtCantidad" style="margin-top: 10px;" name="txtCantidad"></div>
                                    <div style="display: flex;"><input class="form-control-file" type="reset" id="btnLimpiar" value="Limpiar" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;"><input class="form-control-file" type="submit" id="btnAgregar" value="Agregar" name="btnAgregar"></div>
                                </form>
                            </div>
                            <div>
                                <section class="article-list">
                                    <div class="container" style="display: flex;">
                                        <div class="intro">
                                            <h2 class="text-center">MATERIAL EN INVENTARIO</h2>
                                            <div class="table-responsive" id="tblEquipo">
                                                <table class="table tabla-bar">
                                                    <thead>
                                                        <tr>
                                                            <th scope="&quot;col&quot;" style="width: 100px">Codigo Material</th>
                                                            <th scope="&quot;col&quot;" style="width: 150px;">Descripción</th>
                                                            <th scope="&quot;col&quot;" style="width: 130px">Cantidad</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                     require_once "../AgregarObra_M/selectTabla.php";
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="intro">
                            <h2 class="text-center">MATERIAL EN OBRA</h2>
                            <div class="table-responsive" id="tblEquipo-1">
                                <table class="table tabla-bar">
                                    <thead>
                                        <tr>
                                            <th scope="&quot;col&quot;" style="width: 100px">Codigo Material</th>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Id Obra</th>
                                            <th scope="&quot;col&quot;" style="width: 190px;">Nombre Trabajador</th>
                                            <th scope="&quot;col&quot;" style="width: 100px;">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require_once "../AgregarObra_M/selectTablaObra.php";
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </main>
                </div>
                <footer>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 footer-navigation">
                            <h3><a href="#">Company<span>logo </span></a></h3>
                            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
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
                            <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
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