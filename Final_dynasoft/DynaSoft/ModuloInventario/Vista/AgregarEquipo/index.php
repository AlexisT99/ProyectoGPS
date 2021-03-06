<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar_Equipo</title>
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
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Inventario</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                    <form style="display: flex;" action = "../../Modulo/php/InterfazAgregarE.php" method = "POST">
                        <div> 
                            <h1 id="lblAgregarE" style="padding-bottom: 25px;">Agregar Equipo</h1>
                            <p style="padding-bottom: 0px;"><label id="lblCodigo" style="padding-right: 90px;">Codigo:</label><input class="form-control" type="text" id="txtCodigo" style="width: 400px;" name="txtCodigo"></p>
                            <p style="padding-bottom: 0px;"><label id="lblCaracteristicas" style="padding-right: 11px;">Caracteristicas:</label><input class="form-control" type="text" id="txtCaracteristicas" style="width: 400px;" name="txtCaracteristicas"></p>
                            <p style="padding-bottom: 0px;"><label id="lblMarca" style="padding-right: 100px;">Marca:</label><input class="form-control" type="text" id="txtMarca" style="width: 400px;" name="txtMarca"></p>
                            <p style="padding-bottom: 0px;"><label id="lblModelo" style="padding-right: 83px;">Modelo:</label><input class="form-control" type="text" id="txtModelo" style="width: 400px;" name="txtModelo"></p>
                            <p style="padding-bottom: 0px;"><label id="lblModelo" style="padding-right: 83px;">Precio Unitario:</label><input class="form-control" type="number" id="txtModelo" style="width: 400px;" name="txtPrecio"></p>
                            <p style="padding-bottom: 0px;"><label id="lblTipo" style="padding-right: 120px;">Tipo:</label><select class="form-control" id="cmbTipo" name="cmbTipo">
                                    <optgroup label="">
                                        <option value="AUTO" selected="">Auto</option>
                                        <option value="NO AUTO">No Auto</option>
                                    </optgroup>
                                </select></p>
                            <p style="padding-bottom: 0px;"><label id="lblEstado" style="padding-right: 95px;">Estado:</label><select class="form-control" id="cmbEstado" name="cmbEstado">
                                    <optgroup label="">
                                        <option value="BUENO" selected="">Bueno</option>
                                        <option value="MALO">Malo</option>
                                    </optgroup>
                                </select></p>
                            <p style="padding-bottom: 0px;"><label id="lblDescripcion" style="padding-right: 45px;">Descripci??n:</label><textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea></p>
                            <div><input class="form-control-file" type="submit" id="btnGuardar" name="guardar" style="font-weight: bold;background: white;margin: 13px;" value="Agregar"><input class="form-control-file" type="reset" id="btnLimpiar" style="font-weight: bold;background: #17164D;margin-left: 12px;border-radius: 10px;" value="Limpiar"><a id="txtCambio" href="../AgregarMaterial/index.php" name="txtCambio" style="font-weight: bold;background: white;margin: 13px;">&gt;</a></div>
                        </div>
                        <div style="margin-left: 20px;">
                            <div style="padding-left: 30px;height: 700px;border: 3px solid #764119;padding: 20px;width: 500px;">
                                <h1 id="lblMantenimiento" style="padding-bottom: 25px;">Mantenimiento</h1>
                                <p style="padding-bottom: 0px;"><label id="lblProveedor" style="padding-right: 210px;">Proveedor:</label><input class="form-control" type="text" id="txtProveedor" style="width: 400px;" name="txtProveedor"></p>
                                <p style="padding-bottom: 0px;"><label id="lblFechaPM" style="padding-right: 30px;">Fecha Proxima Mantenimiento:</label><input class="form-control" placeholder="AAAA/MM/DD" type="text" id="txtFechaPM" style="width: 400px;" name="txtFechaPM"></p>
                                <p style="padding-bottom: 0px;"><label id="lblFechaPM" style="padding-right: 30px;">Precio Mantenimiento:</label><input class="form-control" type="number" id="txtFechaPM" style="width: 400px;" name="txtPrecio"></p>
                                <p style="padding-bottom: 0px;"><label id="lblTipoServicio" style="padding-right: 200px;">Tipo Servicio:</label><select class="form-control" id="txtTipoServicio">
                                        <optgroup label="">
                                            <option value="P" selected="">PREVENTIVO</option>
                                            <option value="C">CORRECTIVO</option>
                                        </optgroup>
                                    </select></p>
                                <p style="padding-bottom: 0px;"><label id="lblObservaciones" style="padding-right: 200px;">Observaciones:</label><textarea class="form-control" id="txtObservaciones" name="txtObservaciones"></textarea></p>
                            </div>
                            <div style="border: 3px solid #764119;padding: 20px;height: 400px;margin-top: 5px;width: 500px;">
                                <h1 id="lblSeguro" style="padding-bottom: 25px;">Seguro</h1>
                                <p style="padding-bottom: 0px;"><label id="lblSeguro2" style="padding-right: 17px;">Id Seguro:</label><input class="form-control" type="text" id="txtSeguro" style="width: 400px;" name="txtSeguro"></p>
                                <p style="padding-bottom: 0px;"><label id="lblFechaV" style="padding-right: 17px;">Fecha Vencimiento:</label><input class="form-control" type="text" placeholder="AAAA/MM/DD" id="txtFechaV" style="width: 400px;" name="txtFechaV"></p>
                                <p style="padding-bottom: 0px;"><label id="lblCostoS" style="padding-right: 240px;">Costo Seguro:</label><input class="form-control" type="text" id="txtCostoS" style="width: 400px;" name="txtCostoS"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <footer>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 footer-navigation">
                            <h3><a href="#">Company<span>logo </span></a></h3>
                            <p class="links"><a href="#">Home</a><strong> ?? </strong><a href="#">Blog</a><strong> ?? </strong><a href="#">Pricing</a><strong> ?? </strong><a href="#">About</a><strong> ?? </strong><a href="#">Faq</a><strong> ?? </strong><a href="#">Contact</a></p>
                            <p class="company-name">Company Name ?? 2015 </p>
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