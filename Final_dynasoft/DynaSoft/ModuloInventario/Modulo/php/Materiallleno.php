<?php
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "SELECT ID_MATERIAL,NOMBRE_MATERIAL,CANTIDAD_MATERIAL,UNIDAD_MEDIDA,DESCRIPCION,FECHA_VENCIDO,CANTIDAD FROM MATERIAL WHERE CANTIDAD = '2'";
    $datos = mysqli_query($conexion,$query);
    $fila = $datos->fetch_assoc();
        $ID_MATERIAL =$fila['ID_MATERIAL'];
        $NOMBRE_MATERIAL =$fila['NOMBRE_MATERIAL'];
        $CANTIDAD_MATERIAL =$fila['CANTIDAD_MATERIAL'];
        $UNIDAD_MEDIDA =$fila['UNIDAD_MEDIDA'];
        $DESCRIPCION =$fila['DESCRIPCION'];
        $FECHA_VENCIDO =$fila['FECHA_VENCIDO'];
        $CANTIDAD =$fila['CANTIDAD'];
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query = "UPDATE MATERIAL SET CANTIDAD = '1' WHERE ID_MATERIAL = '$ID_MATERIAL' ";
    $datos = mysqli_query($conexion,$query);
  $conexion = mysqli_connect("localhost","root","",'dynasoft');
  if($conexion){
      $consulta = "SELECT ESTADO_PETICION FROM incidentes";
      $datos = $conexion->query($consulta);
          if($datos->num_rows>0){
              while($fila=$datos->fetch_assoc()){
                  $Estado =$fila['ESTADO_PETICION'];
  
                  if($Estado == "Pendiente"){
                      echo '<div class = "formulario-div" style ="color:blue">
                      <h1 style = "text-align:center">'."Nuevo Incidente".'</h1>
                      <p></p>
                      <h4 style = "text-align:center">Redireccionando...</h4>
                      </div>';
                      header('refresh:2,url =../../Vista/ValidarSolicitud/index.php');
                  }
              }
  
          }
  } 
  ?>
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>InicioInv_Material</title>
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/css/Article-List.css">
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/css/Pretty-Footer.css">
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/css/Sidebar-Menu-1.css">
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/css/Sidebar-Menu.css">
      <link rel="stylesheet" href="../../Vista/InterfazInventario_Material/assets/css/styles.css">
  </head>
  
  <body>
      <div id="wrapper">
          <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
              <ul class="sidebar-nav">
                  <li class="sidebar-brand"> <a href="../../../index.php?action=inicio" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                  <li> <a href="../../Vista/InterfazInventario_Material/index.php" style="color: rgb(255,255,255);font-size: 19px;">Inventario</a></li>
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
                  <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 120px;padding-bottom: 120px;">
                      <main>
                          <form style="display: flex;" action = "InterfazControladorMateriales.php" method = "POST">
                              <div >
                                  <div id="ventanaDerecha">
                                      <div style="padding-bottom: 30px;">
                                      <a id="btnMaterial" href="../../Vista/InterfazInventario_Material/index.php" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;">Material</a>
                                      <a id="btnEquipo" href="../../Vista/InterfazInventario_Equipo/index.php">Equipo</a></div>
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
                                                          <td id="lblIdMaterial">Codigo Material</td>
                                                          <td><input class="form-control" type="text" id="txtIdMaterial" name="txtIdMaterial" value = "<?php echo $ID_MATERIAL ?>"></td>
                                                      </tr>
                                                      <tr>
                                                          <td id="lblNombre">Nombre</td>
                                                          <td><input class="form-control" type="text" id="txtNombre" name="txtNombre" value = "<?php echo $NOMBRE_MATERIAL ?>"></td>
                                                      </tr>
                                                      <tr>
                                                          <td id="lblCantidad">Cantidad</td>
                                                          <td><input class="form-control" type="number" id="txtCantidad" name="txtCantidad" value = "<?php echo $CANTIDAD_MATERIAL ?>"></td>
                                                      </tr>
                                                      <tr>
                                                          <td id="lblUnidad">Unidad</td>
                                                          <td><select class="form-control" id="cmbUnidad" name="cmbUnidad">
                                                                  <optgroup label="This is a group">
                                                                      <option value="KG" selected="">Kg</option>
                                                                      <option value="T">T</option>
                                                                      <option value="G">g</option>
                                                                      <option value="MG">mg</option>
                                                                      <option value="L">L</option>
                                                                      <option value="ML">ml</option>
                                                                  </optgroup>
                                                              </select></td>
                                                      </tr>
                                                      <tr>
                                                          <td id="lblFechaVencimiento">Fecha Vencimiento</td>
                                                          <td><input class="form-control" type="text" id="txtFechaVencimiento" name="txtFechaVencimiento" value = "<?php echo $FECHA_VENCIDO ?>"></td>
                                                      </tr>
                                                      <tr>
                                                          <td id="lblDescripcion">Descripción</td>
                                                          <td><textarea class="form-control" id="txtDescripcion" name="txtDescripcion"><?php echo $DESCRIPCION ?></textarea></td>
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
                                  <input class="form-control" type="text" id="txtNombre" name="txtBuscar" style = "margin-bottom:10px">
                                  <input class="form-control-file" type="submit" id="btnModificar" name="btnBuscar" value="Buscar" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;">
                                  </div>
                                  <section class="article-list">
                                      <div class="container">
                                          <div class="intro">
                                              <h2 class="text-center">MATERIAL</h2>
                                              <div class="table-responsive" id="tblEquipo">
                                                  <table class="table tabla-bar">
                                                      <thead>
                                                          <tr>
                                                              <th scope="&quot;col&quot;" style="width: 120px">Codigo Material</th>
                                                              <th scope="&quot;col&quot;" style="width: 80px;">Nombre</th>
                                                              <th scope="&quot;col&quot;" style="width: 90px;">Cantidad</th>
                                                              <th scope="&quot;col&quot;" style="width: 80px">Unidad</th>
                                                              <th scope="&quot;col&quot;" style="width: 150px;">FechaVencimiento</th>
                                                              <th scope="&quot;col&quot;" style="width: 130px">Descripción</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php
                                                          require_once "../../Vista/InterfazInventario_Material/selectMaterial.php";
                                                          ?>
                                                      </tbody>
                                                  </table>
                                              </div> 
                                              <div style="display: flex;">
                                                  <input class="form-control-file" type="submit" id="btnEliminar" name ="btnEliminar_ML" style="font-weight: bold;background: #17164D;margin: 10px;padding: 7px;width: inherit;color: white;" value="Eliminar">
                                                  <input class="form-control-file" type="submit" id="btnModificar" name="btnModificar_ML" value="Modificar" style="font-weight: bold;background: white;margin: 10px;width: inherit;padding: 7px;">
                                                  <a id="btnAgregar" href="../../Vista/AgregarMaterial/index.php" style="font-weight: bold;background: #17164D;margin: 10px;width: inherit;color: white;padding: 7px;">Agregar</a>
                                              </div>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </form>
                          <div>
                              <h2 class="text-center">Recordatorio</h2>
                              <div class="table-responsive" id="tblEquipo-1">
                                  <table class="table tabla-bar"  >
                                      <thead>
                                          <tr>
                                              <th scope="&quot;col&quot;" style="width: 130px;">Mantenimiento</th>
                                              <th scope="&quot;col&quot;" style="width: 150px;">Fecha Mantenimiento</th>
                                              <th scope="&quot;col&quot;" style="width: 150px;">Seguro</th>
                                              <th scope="&quot;col&quot;" style="width: 150px;">Fecha Vencimiento</th>
                                              <th scope="&quot;col&quot;" style="width: 150px;">Descripcion</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          require_once "../../Vista/InterfazInventario_Equipo/selectTabla.php";
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
      <script src="../../Vista/InterfazInventario_Material/assets/js/jquery.min.js"></script>
      <script src="../../Vista/InterfazInventario_Material/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="../../Vista/InterfazInventario_Material/assets/js/Sidebar-Menu.js"></script>
      
  </body>
  
  </html>