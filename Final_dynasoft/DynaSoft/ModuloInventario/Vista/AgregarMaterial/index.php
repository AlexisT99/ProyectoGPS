<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar_Material</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li> <a href="../InterfazInventario_Equipo/index.php" style="color: rgb(255,255,255);font-size: 19px;">Inventario</a></li>
                <li> <a href="../AgregarEquipo/index.php" style="color: rgb(255,255,255);font-size: 19px;">Agregar</a><a href="../AgregarMaterial/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Material</a><a href="../AgregarEquipo/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Equipo</a><a href="../AgregarMantenimiento/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Mantenimiento/Seguro</a></li>
                <li> <a href="../AgregarObra_M/index.php" style="color: rgb(255,255,255);font-size: 19px;">Obras Material</a></li>
                <li> </li>
                <li> <a href="../AgregarObra_E/index.php" style="color: rgb(255,255,255);font-size: 19px;">Obras Equipo</a></li>
                <li> </li>
                <li> <a href="../ValidarSolicitud/index.php" style="color: rgb(255,255,255);font-size: 19px;">Solicitud Incidentes</a></li>
                <li> </li>
                <li class="sidebar-brand" style="margin-top: 100px;"> <a href="#" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;">Ir a Nomina</a><a href="#" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;margin-top: -25px;">Ir a Obra</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Inventario</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                    <form action = "../../Modulo/php/InterfazAgregarM.php" method = "POST">
                        <h1 id="lblAgregarE" style="padding-bottom: 25px;">Agregar Material</h1>
                        <p style="padding-bottom: 0px;"><label id="lblIdMantenimiento" style="padding-right: 90px;">Id Material:</label><input class="form-control" type="text" id="txtIdMantenimiento" style="width: 550px;" name="txtIdMantenimiento"></p>
                        <p style="padding-bottom: 0px;"><label id="lblNombre" style="padding-right: 115px;">Nombre:</label><input class="form-control" type="text" id="txtNombre" style="width: 550px;" name="txtNombre"></p>
                        <p style="padding-bottom: 0px;"><label id="lblUnidad" style="padding-right: 128px;">Unidad:</label><select class="form-control" id="cmbUnidad" name="cmbUnidad">
                                <optgroup label="This is a group">
                                    <option value="KG" selected="">Kg</option>
                                    <option value="T">T</option>
                                    <option value="G">g</option>
                                    <option value="MG">mg</option>
                                    <option value="L">L</option>
                                    <option value="ML">ml</option>
                                </optgroup>
                            </select></p>
                        <p style="padding-bottom: 0px;"><label id="lblCantidad" style="padding-right: 110px;">Cantidad:</label><input class="form-control" type="number" id="txtCantidad" style="width: 550px;" name="txtCantidad"></p>
                        <p style="padding-bottom: 0px;"><label id="lblCantidad" style="padding-right: 110px;">Precio unitario:</label><input class="form-control" type="number" id="txtCantidad" style="width: 550px;" name="txtPrecio"></p>
                        <p style="padding-bottom: 0px;"></p>
                        <p style="padding-bottom: 0px;"><label id="lblDescripcion" style="padding-right: 85px;">Descripción:</label><textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea></p>
                        <p style="padding-bottom: 0px;"><label id="lblFechaV" style="padding-right: 5px;">Fecha Vencimiento:</label><input class="form-control" placeholder="AAAA/MM/DD" type="text" id="txtFechaV" style="width: 550px;" name="txtFechaV"></p>
                        <p style="padding-bottom: 0px;"></p>
                        <p style="padding-bottom: 0px;"></p>
                        <p style="margin-top: 1rem;"><input class="form-control-file" type="submit" id="btnGuardar" name = "btnGuardar" value="Guardar"><input class="form-control-file" type="reset" id="btnLimpiar" value="Limpiar" style="font-weight: bold;background: #17164D;border-radius: 10px;color: white;"><input class="form-control-file" type="submit" id="btnGuardar" name = "cantidad" value="AgregarCantidad"><a id="btnCambio" href="../AgregarEquipo/index.php">&lt;</a></p>
                    </form>
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