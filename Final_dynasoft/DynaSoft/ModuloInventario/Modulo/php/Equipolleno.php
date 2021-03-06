<?php
$conexion = mysqli_connect("localhost","root","",'dynasoft');
  $query = "SELECT CODIGO_EQUIPO,CANTIDAD_EQUIPO,DESCRIPCION_EQUIPO,CARACTERISTICAS,MARCA_EQUIPO,MODELO_EQUIPO,TIPO_EQUIPO,DISPONIBLE FROM EQUIPO WHERE CANTIDAD_EQUIPO = '2' ";
  $datos = mysqli_query($conexion,$query);
  $fila = $datos->fetch_assoc();
      $codigo_equipo =$fila['CODIGO_EQUIPO'];
      $CANTIDAD_EQUIPO =$fila['CANTIDAD_EQUIPO'];
      $DESCRIPCION_EQUIPO =$fila['DESCRIPCION_EQUIPO'];
      $CARACTERISTICAS =$fila['CARACTERISTICAS'];
      $MARCA_EQUIPO =$fila['MARCA_EQUIPO'];
      $MODELO_EQUIPO =$fila['MODELO_EQUIPO'];
      $TIPO_EQUIPO =$fila['TIPO_EQUIPO'];
      $DISPONIBLE =$fila['DISPONIBLE'];
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "UPDATE EQUIPO SET CANTIDAD_EQUIPO = '1' WHERE CODIGO_EQUIPO = '$codigo_equipo' ";
    $datos = mysqli_query($conexion,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>InicioInv_Equipo</title>
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/css/Article-List.css">
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="../../Vista/InterfazInventario_Equipo/assets/css/styles.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
            <li class="sidebar-brand"> <a href="../../../index.php?action=inicio" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li> <a href="../../Vista/InterfazInventario_Equipo/index.php" style="color: rgb(255,255,255);font-size: 19px;">Inventario</a></li>
                <li> <a href="../../Vista/AgregarEquipo/index.php" style="color: rgb(255,255,255);font-size: 19px;">Agregar</a>
                <a href="../../Vista/AgregarMaterial/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Material</a>
                <a href="../../Vista/AgregarEquipo/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Equipo</a>
                <a href="../../Vista/AgregarMantenimiento/index.php" style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Mantenimiento/Seguro</a></li>
                <li> <a href="../../Vista/AgregarObra_M/index.php" style="color: rgb(255,255,255);font-size: 19px;">Obras Material</a></li>
                <li> </li>
                <li> <a href="../../Vista/AgregarObra_E/index.php" style="color: rgb(255,255,255);font-size: 19px;">Obras Equipo</a></li>
                <li> </li>
                <li> <a href="../../Vista/ValidarSolicitud/index.php" style="color: rgb(255,255,255);font-size: 19px;">Solicitud Incidentes</a></li>
                <li> </li>
                <li class="sidebar-brand" style="margin-top: 100px;"> 
                <a href="../../../ModuloObra/obra-index.php" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;">Ir a Nomina</a>
                <a href="../../../index.php?action=iniModNom" style="font-weight: bold;color: rgb(255,255,255);font-size: 22px;margin-top: -25px;">Ir a Obra</a></li>
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
                        <form style="display: flex;" action = "InterfazControlador.php" method = "POST">
                            <div >
                                <div id="ventanaDerecha">
                                    <div style="padding-bottom: 30px;">
                                    <a id="btnMaterial" href="../../Vista/InterfazInventario_Material/index.php" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;">Material</a>
                                    <a id="btnEquipo" href="../../Vista/InterfazInventario_Equipo/index.php" style="font-weight: bold;background: #17164D;margin: 10px;width: inherit;color: white;padding: 7px;">Equipo</a></div>
                                    <div>
                                        <div class="table-responsive" id="tblObjeto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th id="lblObjeto">Objeto de inventario</th>
                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td id="lblCodigo">C??digo</td>
                                                        <td><input class="form-control" type="text" id="txtCodigo" name="txtCodigo" value = "<?php echo $codigo_equipo ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="lblCaracteristicas">Caracter??sticas</td>
                                                        <td><input class="form-control" type="text" id="txtCaracteristicas" name="txtCaracteristicas" value = "<?php echo $CARACTERISTICAS ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="lblMarca">Marca</td>
                                                        <td><input class="form-control" type="text" id="txtMarca" name="txtMarca" value = "<?php echo $MARCA_EQUIPO ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="lblModelo">Modelo</td>
                                                        <td><input class="form-control" type="text" id="txtModelo" name="txtModelo" value = "<?php echo $MODELO_EQUIPO ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="lblTipo">Tipo</td>
                                                        <td><select class="form-control" id="cmbTipo" name="cmbTipo">
                                                                <optgroup label="This is a group">
                                                                    <option value="Auto">Auto</option>
                                                                    <option value="No auto" selected="">No Auto</option>
                                                                </optgroup>
                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="lblDescripcion">Descripci??n</td>
                                                        <td><textarea class="form-control" id="txtDescripcion" name="txtDescripcion"><?php echo $DESCRIPCION_EQUIPO ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control-file" type="reset" id="btnLimpiar" value="Limpiar" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div style= "display:flex;">
                                <input class="form-control" type="text" id="txtMarca" name="txtBuscar" style = "margin-bottom:10px">
                                <input class="form-control-file" type="submit" id="btnModificar" name="btnBuscar" value="Buscar" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;">
                                </div>
                                <section class="article-list">
                                    <div class="container">
                                        <div class="intro">
                                            <div>
                                            </div>
                                            <h2 class="text-center">EQUIPO</h2>
                                            <div class="table-responsive" id="tblEquipo">
                                                <table class="table tabla-bar" style="width:750px">
                                                    <thead>
                                                        <tr>
                                                            <th scope="&quot;col&quot;" style="width: 100px">C??digo</th>
                                                            <th scope="&quot;col&quot;" style="width: 130px">Caracter??sticas</th>
                                                            <th scope="&quot;col&quot;" style="width: 70px">Marca</th>
                                                            <th scope="&quot;col&quot;" style="width: 130px">Ubicaci??n</th>
                                                            <th scope="&quot;col&quot;" style="width: 130px">Responsable</th>
                                                            <th scope="&quot;col&quot;" style="width: 130px">Descripci??n</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        require_once "../../Vista/InterfazInventario_Equipo/selectEquipo.php";
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div style="display: flex;">
                                                <input class="form-control-file" type="submit" id="btnEliminar"  name ="btnEliminar_EL"style="font-weight: bold;background: #17164D;margin: 10px;padding: 7px;width: inherit;color: white;" value="Eliminar">
                                                <input class="form-control-file" type="submit" id="btnModificar" name="btnModificar_EL" value="Modificar" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;">
                                                <a id="btnAgregar" href="../../Vista/AgregarEquipo/index.php" style="font-weight: bold;background: #17164D;margin: 10px;width: inherit;color: white;padding: 7px;">Agregar</a>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-center">Recordatorio</h2>
                            <div class="table-responsive" id="tblEquipo-1">
                                <table class="table tabla-bar">
                                    <thead>
                                        <tr>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Mantenimiento</th>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Fecha Mantenimiento</th>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Seguro</th>
                                            <th scope="&quot;col&quot;" style="width: 150px;">Fecha Vencimiento</th>
                                            <th scope="&quot;col&quot;" style="width: 130px;">Descripcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require_once "../../Vista/InterfazInventario_Equipo/selectTabla.php";
                                    ?>  
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </main>
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
    <script src="../../Vista/InterfazInventario_Equipo/assets/js/jquery.min.js"></script>
    <script src="../../Vista/InterfazInventario_Equipo/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Vista/InterfazInventario_Equipo/assets/js/Sidebar-Menu.js"></script>
</body>

</html>