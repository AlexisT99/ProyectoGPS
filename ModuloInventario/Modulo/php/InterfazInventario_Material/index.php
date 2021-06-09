<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>InicioInv_Material</title>
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
                <li class="sidebar-brand"> <a href="#" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Inventario</a></li>
                <li> <a href="#" style="color: rgb(255,255,255);font-size: 19px;">Agregar</a><a href="#" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Material</a><a href="#" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Equipo</a></li>
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
                            <h1 id="lblTitulo" style="color: rgb(255,255,255);margin-bottom: 0px;">Modulo&nbsp;<small>Inventario</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 120px;padding-bottom: 120px;">
                    <main>
                        <div style="display: flex;">
                            <div id="ventanaDerecha">
                                <div>
                                    <div class="btn-toolbar">
                                        <div class="btn-group" role="group"><button class="btn btn-primary" id="btnMaterial" type="button" style="font-weight: bold;background: white;margin: 13px;width: inherit;">Material</button><button class="btn btn-primary" id="btnEquipo" type="button" style="font-weight: bold;background: #17164D;margin: 10px;width: inherit;">Equipo</button></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="table-responsive" id="tblObjeto">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th id="lblObjeto">Objeto de material</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td id="lblIdMaterial">IdMaterial</td>
                                                    <td><input type="text" id="txtIdMaterial"></td>
                                                </tr>
                                                <tr>
                                                    <td id="lblNombre">Nombre</td>
                                                    <td><input type="text" id="txtNombre"></td>
                                                </tr>
                                                <tr>
                                                    <td id="lblCantidad">Cantidad</td>
                                                    <td><input type="text" id="txtCantidad"></td>
                                                </tr>
                                                <tr>
                                                    <td id="lblUnidad">Unidad</td>
                                                    <td><input type="text" id="txtUnidad"></td>
                                                </tr>
                                                <tr>
                                                    <td id="lblFechaVencimiento">Fecha Vencimiento</td>
                                                    <td><input type="text" id="txtFechaVencimiento"></td>
                                                </tr>
                                                <tr>
                                                    <td id="lblDescripcion">Descripción</td>
                                                    <td><textarea id="txtDescripcion"></textarea></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div></div>
                                <section class="article-list">
                                    <div class="container">
                                        <div class="intro">
                                            <div><input type="text" id="txtBuscar"><button class="btn btn-primary" id="btnBuscar" type="button" style="font-weight: bold;background: white;margin: 10px;width: inherit;">Buscar</button></div>
                                            <h2 class="text-center">MATERIAL</h2>
                                            <div class="table-responsive" id="tblEquipo">
                                                <table class="table tabla-bar">
                                                    <thead>
                                                        <tr>
                                                            <th scope="&quot;col&quot;" style="width: 100px">IdMaterial</th>
                                                            <th scope="&quot;col&quot;" style="width: 80px;">Nombre</th>
                                                            <th scope="&quot;col&quot;" style="width: 90px;">Cantidad</th>
                                                            <th scope="&quot;col&quot;" style="width: 80px">Unidad</th>
                                                            <th scope="&quot;col&quot;" style="width: 150px;">FechaVencimiento</th>
                                                            <th scope="&quot;col&quot;" style="width: 130px">Descripción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group" role="group"><button class="btn btn-primary" id="btnLimpiar" type="button" style="font-weight: bold;background: white;margin: 10px;width: inherit;">Limpiar</button><button class="btn btn-primary" id="btnEliminar" type="button" style="font-weight: bold;background: #17164D;margin: 10px;width: inherit;">Eliminar</button><button class="btn btn-primary" id="btnModificar" type="button" style="font-weight: bold;background: white;margin: 10px;width: inherit;">Modificar</button><button class="btn btn-primary" id="btnAgregar" type="button" style="font-weight: bold;background: #17164D;margin: 10px;width: inherit;">Agregar</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-center">Recordatorio</h2>
                            <div class="table-responsive" id="tblEquipo-1">
                                <table class="table tabla-bar">
                                    <thead>
                                        <tr>
                                            <th scope="&quot;col&quot;" style="width: 130px;">Código</th>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Mantenimiento</th>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Seguro</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
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