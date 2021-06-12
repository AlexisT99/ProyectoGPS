<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar_Mantenimiento</title>
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
                <li> </li>
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
                    <form style="display: flex;">
                        <div style="padding-left: 30px;height: 920px;border: 3px solid #764119;padding: 20px;width: 420px;">
                            <h1 id="lblMantenimiento" style="padding-bottom: 25px;">Mantenimiento</h1>
                            <p style="padding-bottom: 0px;"><label id="lblCodigo_M" style="padding-right: 20px;">Codigo Equipo:</label><input class="form-control" type="text" id="txtCodigo_M" style="width: 200px;" name="txtCodigo_M"></p>
                            <p style="padding-bottom: 0px;"><label id="lblProveedor" style="padding-right: 20px;">Proveedor:</label><input class="form-control" type="text" id="txtProveedor" style="width: 200px;" name="txtProveedor"></p>
                            <p style="padding-bottom: 0px;"><label id="lblFechaPM" style="padding-right: 30px;">Fecha Proxima Mantenimiento:</label><input class="form-control" type="text" id="txtFechaPM" style="width: 200px;" name="txtFechaPM" placeholder="AAAA/MM/DD"></p>
                            <p style="padding-bottom: 0px;"><label id="lblTipoServicio" style="padding-right: 20px;">Tipo Servicio:</label><select class="form-control" id="cmbTipoServicio" name="cmbTipoServicio">
                                    <optgroup label="This is a group">
                                        <option value="12" selected="">This is item 1</option>
                                        <option value="13">This is item 2</option>
                                        <option value="14">This is item 3</option>
                                    </optgroup>
                                </select></p>
                            <p style="padding-bottom: 0px;"><label id="lblObservaciones" style="padding-right: 20px;">Observaciones:</label><textarea class="form-control" id="txtObservaciones" name="txtObservaciones"></textarea></p>
                            <p style="padding-bottom: 0px;"><label id="lblEstado" style="padding-right: 95px;">Estado:</label><select class="form-control" id="cmbEstado" name="cmbEstado">
                                    <optgroup label="This is a group">
                                        <option value="12" selected="">This is item 1</option>
                                        <option value="13">This is item 2</option>
                                        <option value="14">This is item 3</option>
                                    </optgroup>
                                </select></p>
                            <div><input class="form-control-file" type="submit" id="btnGuardar_M" value="Agregar" name="btnGuardar_M"><input class="form-control-file" type="reset" id="btnLimpiar_M" value="Limpiar" name="btnLimpiar_M"><a id="btnCambio" href="../AgregarMaterial/index.php" name="btnCambio" style="font-weight: bold;background: white;margin: 13px;">&gt;</a></div>
                        </div>
                    </form>
                    <form>
                        <div style="margin-left: 20px;border: 3px solid #764119;padding: 20px;height: 600px;margin-top: 5px;width: 400px;">
                            <div>
                                <h1 id="lblSeguro" style="padding-bottom: 25px;">Seguro</h1>
                                <p style="padding-bottom: 0px;"><label id="lblCodigo_S" style="padding-right: 20px;">Codigo Equipo:</label><input class="form-control" type="text" id="txtCodigo_S" style="width: 200px;" name="txtCodigo_S"></p>
                                <p style="padding-bottom: 0px;"><label id="lblSeguro2" style="padding-right: 17px;">Id Seguro:</label><input class="form-control" type="text" id="txtSeguro" style="width: 200px;" name="txtSeguro"></p>
                                <p style="padding-bottom: 0px;"><label id="lblFechaV" style="padding-right: 17px;">Fecha Vencimiento:</label><input class="form-control" type="text" id="txtFechaV" style="width: 200px;" name="txtFechaV" placeholder="AAA/MM/DD"></p>
                                <p style="padding-bottom: 0px;"><label id="lblCostoS" style="padding-right: 20px;">Costo Seguro:</label><input class="form-control" type="number" id="txtCostoS" style="width: 200px;" name="txtCostoS"></p>
                            </div>
                            <div><input class="form-control-file" type="submit" id="btnGuardar_S" value="Agregar" name="btnGuardar_S"><input class="form-control-file" type="reset" id="btnLimpiar_S" value="Limpiar" name="btnLimpiar_S"></div>
                        </div>
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