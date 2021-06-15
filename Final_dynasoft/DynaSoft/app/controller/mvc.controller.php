<?php
require 'app/model/db.class.php';
require 'app/model/fpdf/fpdf.php';
require 'app/model/conexion.php';
include 'app/model/ChromePhp.php';
require 'app/model/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

session_start();
class mvc_controller
{

  //Mostrar pagina principal
  function principal()
  {
    //Carga de archivos  
    $pagina = $this->load_page('app/views/default/page.php');
    $styles = $this->load_page('app/views/default/sections/s.styles.php');
    $localjs = $this->load_page('app/views/default/sections/s.js_index.php');
    $navbar = $this->load_page('app/views/default/sections/s.navbar_Dynasoft.php');
    $footer = $this->load_page('app/views/default/sections/s.footer.php');
    $contenido = $this->load_page('app/views/default/modules/m.inicioDynasoft.php');
    //Modificar contenido
    $pagina = $this->replace_content('/\#TITULO\#/ms', 'Bienvenido a DynaSoft', $pagina);
    $pagina = $this->replace_content('/\#STYLES\#/ms', $styles, $pagina);
    $pagina = $this->replace_content('/\#LOCALJS\#/ms', $localjs, $pagina);
    $pagina = $this->replace_content('/\#NAVBAR\#/ms', $navbar, $pagina);
    $pagina = $this->replace_content('/\#FOOTER\#/ms', $footer, $pagina);
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $contenido, $pagina);
    return $pagina;
  }

  function load_template($titulo = '')
  {
    $pagina = $this->load_page('app/views/default/page.php');
    $styles = $this->load_page('app/views/default/sections/s.styles.php');
    $localjs = $this->load_page('app/views/default/sections/s.js_index.php');
    $navbar = $this->load_page('app/views/default/sections/s.navbar_inicio.php');
    $footer = $this->load_page('app/views/default/sections/s.footer.php');
    $pagina = $this->replace_content('/\#TITULO\#/ms', $titulo, $pagina);
    $pagina = $this->replace_content('/\#STYLES\#/ms', $styles, $pagina);
    $pagina = $this->replace_content('/\#LOCALJS\#/ms', $localjs, $pagina);
    $pagina = $this->replace_content('/\#NAVBAR\#/ms', $navbar, $pagina);
    $pagina = $this->replace_content('/\#FOOTER\#/ms', $footer, $pagina);
    return $pagina;
  }
  function load_templateNom($titulo = '')
  {
    $pagina = $this->load_page('app/views/default/page.php');
    $styles = $this->load_page('app/views/default/sections/s.styles.php');
    $localjs = $this->load_page('app/views/default/sections/s.js_index.php');
    $navbar = $this->load_page('app/views/default/sections/s.navbar_inicio.php');
    $footer = $this->load_page('app/views/default/sections/s.footer.php');
    $pagina = $this->replace_content('/\#TITULO\#/ms', $titulo, $pagina);
    $pagina = $this->replace_content('/\#STYLES\#/ms', $styles, $pagina);
    $pagina = $this->replace_content('/\#LOCALJS\#/ms', $localjs, $pagina);
    $pagina = $this->replace_content('/\#NAVBAR\#/ms', $navbar, $pagina);
    $pagina = $this->replace_content('/\#FOOTER\#/ms', $footer, $pagina);
    return $pagina;
  }
  function load_templatePDF()
  {
    $pagina = $this->load_page('app/views/default/pagePDF.php');
    return $pagina;
  }

  function load_pdf($titulo = '')
  {
    $pagina = $this->load_page('app/views/default/modules/m.page_pdf.php');
    $styles = $this->load_page('app/views/default/sections/s.styles.php');
    $localjs = $this->load_page('app/views/default/sections/s.js_index.php');
    $pagina = $this->replace_content('/\#TITULO\#/ms', $titulo, $pagina);
    $pagina = $this->replace_content('/\#STYLES\#/ms', $styles, $pagina);
    $pagina = $this->replace_content('/\#LOCALJS\#/ms', $localjs, $pagina);
    return $pagina;
  }

  function login($error = "Usuario o contraseña erroneo")
  {
    $pagina = $this->load_page('app/views/default/login.php');
    if (isset($error)) {
      $error_login = $this->load_page('app/views/default/sections/s.error_login.php');
      $error_login = $this->replace_content('/\#ERROR\#/ms', $error, $error_login);
      $pagina = $this->replace_content('/\#ERROR_LOGIN\#/ms', $error_login, $pagina);
    } else {
      $pagina = $this->replace_content('/\#ERROR_LOGIN\#/ms', "", $pagina);
    }
    return $pagina;
  }

  function inicioNomina()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('inicioNomina');
    $pagina = $this->load_template('Modulo Nomina');
    //Le pasamos los resultados al $data

    ob_start();
    include 'app/views/default/modules/m.principal.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function viaticos()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('viaticos');
    $pagina = $this->load_templateNom('viaticos');
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT IDTRABAJADOR, CONCAT(NOMBRETRAB,' ',APEPATTRAB,' ',APEMATTRAB) as 'NOMBRETRAB' FROM trabajadores";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    $consulta = "SELECT * FROM `tipoviaticos`";
    $resultado2 = $conexion->prepare($consulta);
    $resultado2->execute();

    ob_start();
    $data = $resultado->fetchAll();
    $data2 = $resultado2->fetchAll();
    include 'app/views/default/modules/m.viaticos.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function trabajadores()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('trabajadores');
    $pagina = $this->load_templateNom('trabajadores');
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT IDPUESTOS,NOMBREPUESTO from puestos";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    ob_start();
    $data = $resultado->fetchAll();
    include 'app/views/default/modules/m.trabajadores.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function solGas()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('solGas');
    $pagina = $this->load_templateNom('solGas');
    //Le pasamos los resultados al $data

    ob_start();
    include 'app/views/default/modules/m.solGastos.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function gasServ()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('gasServ');
    $pagina = $this->load_templateNom('gasServ');
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT IDTRABAJADOR, CONCAT(NOMBRETRAB,' ',APEPATTRAB,' ',APEMATTRAB) as 'NOMBRETRAB' FROM trabajadores";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    $consulta = "SELECT * FROM Servicios";
    $resultado2 = $conexion->prepare($consulta);
    $resultado2->execute();

    ob_start();
    $data = $resultado->fetchAll();
    $data2 = $resultado2->fetchAll();
    include 'app/views/default/modules/m.GasServ.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function prestamos()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('prestamos');
    $pagina = $this->load_templateNom('prestamos');
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT `IDTRABAJADOR`, CONCAT(`NOMBRETRAB`,' ', `APEPATTRAB`, ' ', `APEMATTRAB`) AS NOMBRE_COMP FROM `trabajadores`";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    ob_start();
    $data = $resultado->fetchAll();
    include 'app/views/default/modules/m.prestamos.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function prestaciones()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('prestaciones');
    $pagina = $this->load_templateNom('prestaciones');
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT * FROM cat_prestacion";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    ob_start();
    $data = $resultado->fetchAll();
    include 'app/views/default/modules/m.prestaciones.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function servicios()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('Servicios');
    $pagina = $this->load_templateNom('Servicios');
    //Le pasamos los resultados al $data

    ob_start();
    include 'app/views/default/modules/m.servicios.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function puestos()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('Puestos');
    $pagina = $this->load_templateNom('Puestos');
    //Le pasamos los resultados al $data

    ob_start();
    include 'app/views/default/modules/m.puestos.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function genNom()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('GenNom');
    $pagina = $this->load_templateNom('Generar Nomina');
    //Le pasamos los resultados al $data

    ob_start();
    include 'app/views/default/modules/m.genNom.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function talones()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('talones');
    $pagina = $this->load_templateNom('Mis talones de pago');
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT n.IDPAGO,n.FECHA,n.INICIOPERIODO,n.FINPERIODO,(SELECT SUM(MONTO) FROM prestacion_nomina_trab where IDTRABAJADOR = pnt.IDTRABAJADOR and IDPAGO=n.IDPAGO) as 'LIQUIDO' FROM prestacion_nomina_trab pnt INNER JOIN nomina n ON (n.IDPAGO=pnt.IDPAGO) WHERE IDTRABAJADOR=" . $_SESSION['IDTRABAJADOR'] . " GROUP BY n.IDPAGO";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    ob_start();
    $data = $resultado->fetchAll();
    include 'app/views/default/modules/m.talones.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }
  function verTalon($idPago='')
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('talones');
    $pagina = $this->load_templatePDF();
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT CONCAT(NOMBRETRAB,' ',APEPATTRAB,' ',APEMATTRAB) AS 'NOMBRE_TRAB' FROM trabajadores WHERE IDTRABAJADOR=".$_SESSION['IDTRABAJADOR'];
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $consulta = "SELECT * FROM nomina WHERE IDPAGO=".$idPago;
    $resultado2 = $conexion->prepare($consulta);
    $resultado2->execute();
    $consulta = "SELECT p.IDPRESTACION,p.NOMBREPRES, pnt.MONTO FROM prestacion_nomina_trab pnt INNER JOIN prestaciones p on (p.IDPRESTACION = pnt.IDPRESTACION) WHERE pnt.IDTRABAJADOR=".$_SESSION['IDTRABAJADOR']." and pnt.IDPAGO=".$idPago." and p.IDCATPRESTACION = 1";
    $resultado3 = $conexion->prepare($consulta);
    $resultado3->execute();
    $consulta = "SELECT p.IDPRESTACION,p.NOMBREPRES, pnt.MONTO FROM prestacion_nomina_trab pnt INNER JOIN prestaciones p on (p.IDPRESTACION = pnt.IDPRESTACION) WHERE pnt.IDTRABAJADOR=".$_SESSION['IDTRABAJADOR']." and pnt.IDPAGO=".$idPago." and p.IDCATPRESTACION != 1";
    $resultado4 = $conexion->prepare($consulta);
    $resultado4->execute();
    $consulta = "SELECT SUM(MONTO) AS 'MONTO' FROM prestacion_nomina_trab WHERE IDTRABAJADOR=".$_SESSION['IDTRABAJADOR']." AND IDPAGO=".$idPago;
    $resultado5 = $conexion->prepare($consulta);
    $resultado5->execute();
    $consulta = "SELECT SUM(pnt.MONTO) AS 'MONTO' FROM prestacion_nomina_trab pnt INNER JOIN prestaciones p on (p.IDPRESTACION = pnt.IDPRESTACION) WHERE pnt.IDTRABAJADOR=".$_SESSION['IDTRABAJADOR']." and pnt.IDPAGO=".$idPago." and p.IDCATPRESTACION = 1";
    $resultado6 = $conexion->prepare($consulta);
    $resultado6->execute();
    $consulta = "SELECT SUM(pnt.MONTO) AS 'MONTO' FROM prestacion_nomina_trab pnt INNER JOIN prestaciones p on (p.IDPRESTACION = pnt.IDPRESTACION) WHERE pnt.IDTRABAJADOR=".$_SESSION['IDTRABAJADOR']." and pnt.IDPAGO=".$idPago." and p.IDCATPRESTACION != 1";
    $resultado7 = $conexion->prepare($consulta);
    $resultado7->execute();
    ob_start();
    $data = $resultado->fetch();
    $data2 = $resultado2->fetch();
    $data3 = $resultado3->fetchAll();
    $data4 = $resultado4->fetchAll();
    $data5 = $resultado5->fetch();
    $data6 = $resultado6->fetch();
    $data7 = $resultado7->fetch();
    include 'app/views/default/modules/m.talon.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $pdf = new DOMPDF();

    // Definimos el tamaño y orientación del papel que queremos.
    $pdf->setPaper("letter", "portrait");
    //$pdf->set_paper(array(0,0,104,250));

    // Cargamos el contenido HTML.
    $pdf->loadHtml(utf8_decode($pagina));

    // Renderizamos el documento PDF.
    $pdf->render();

    // Enviamos el fichero PDF al navegador.
    $pdf->stream('reportePdf.pdf');
    
  }

  function genInfIng($fechaIni='', $fechaFin='')
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('genInfIng');
    $pagina = $this->load_templatePDF();
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT * FROM ingresos WHERE FECHAINGRESO BETWEEN '".$fechaIni."' and '".$fechaFin."'";
    ChromePhp::log($consulta);
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $consulta = "SELECT r.IDREINTEGRO,tv.NOMBRE,r.INGMONTO,r.FECHAOTING FROM reintegro r INNER JOIN tipviat_viaticos tvv on (r.IDDETVIAT=tvv.IDDETVIAT) INNER JOIN tipoviaticos tv ON (tv.IDTIVIATICO=tvv.IDTIVIATICO) WHERE FECHAOTING BETWEEN '".$fechaIni."' and '".$fechaFin."'";
    ChromePhp::log($consulta);
    $resultado2 = $conexion->prepare($consulta);
    $resultado2->execute();
    $consulta = "SELECT SUM(INGMONTO) AS 'MONTO' FROM reintegro WHERE FECHAOTING BETWEEN '".$fechaIni."' and '".$fechaFin."'";
    ChromePhp::log($consulta);
    $resultado3 = $conexion->prepare($consulta);
    $resultado3->execute();
    $consulta = "SELECT SUM(MONTO_INGRESO) AS 'MONTO' FROM ingresos WHERE FECHAINGRESO BETWEEN '".$fechaIni."' and '".$fechaFin."'";
    ChromePhp::log($consulta);
    $resultado4 = $conexion->prepare($consulta);
    $resultado4->execute();
    ob_start();
    $data = $resultado->fetchAll();
    $data2 = $resultado2->fetchAll();
    $data3 = $resultado3->fetch();
    $data4 = $resultado4->fetch();
    include 'app/views/default/modules/m.infIng.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $pdf = new DOMPDF();

    // Definimos el tamaño y orientación del papel que queremos.
    $pdf->setPaper("letter", "portrait");
    //$pdf->set_paper(array(0,0,104,250));

    // Cargamos el contenido HTML.
    $pdf->loadHtml(utf8_decode($pagina));

    // Renderizamos el documento PDF.
    $pdf->render();

    // Enviamos el fichero PDF al navegador.
    $pdf->stream('informeIngresos.pdf');
    
  }

  function genInfGas($fechaIni='', $fechaFin='')
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('genInfIng');
    $pagina = $this->load_templatePDF();
    //Le pasamos los resultados al $data
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $consulta = "SELECT g.IDGASTO,g.MONTO,g.FECHAGASTO,g.DESCRIPCION,sg.ESTADOSOLICITUD FROM gastos g INNER JOIN solicitudes_gastos sg ON (g.IDGASTO=sg.IDGASTO) WHERE g.FECHAGASTO BETWEEN '".$fechaIni."' and '".$fechaFin."'";
    ChromePhp::log($consulta);
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $consulta = "SELECT SUM(MONTO) AS 'MONTO'  FROM gastos WHERE FECHAGASTO BETWEEN '".$fechaIni."' and '".$fechaFin."'";
    ChromePhp::log($consulta);
    $resultado2 = $conexion->prepare($consulta);
    $resultado2->execute();
    ob_start();
    $data = $resultado->fetchAll();
    $data2 = $resultado2->fetch();
    include 'app/views/default/modules/m.infGas.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $pdf = new DOMPDF();

    // Definimos el tamaño y orientación del papel que queremos.
    $pdf->setPaper("letter", "portrait");
    //$pdf->set_paper(array(0,0,104,250));

    // Cargamos el contenido HTML.
    $pdf->loadHtml(utf8_decode($pagina));

    // Renderizamos el documento PDF.
    $pdf->render();

    // Enviamos el fichero PDF al navegador.
    $pdf->stream('informeGastos.pdf');
    
  }

  function ingresos()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('ingresos');
    $pagina = $this->load_templateNom('Generar informe de ingresos');
    //Le pasamos los resultados al $data
    ob_start();
    include 'app/views/default/modules/m.informeIng.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function gastos()
  {
    $seguridad = new seguridad;
    $seguridad->set_session_form('ingresos');
    $pagina = $this->load_templateNom('Generar informe de gastos');
    //Le pasamos los resultados al $data
    ob_start();
    include 'app/views/default/modules/m.informeGas.php';
    $datos = ob_get_clean();
    $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $datos, $pagina);
    $this->view_page($pagina);
  }

  function login_action($user, $pass)
  {
    $validar = new database;
    if ($row_usuario = $validar->validarUsuario($user, $pass)) {
      $_SESSION['IDTRABAJADOR'] = $row_usuario['IDTRABAJADOR'];
      $_SESSION['hora_session'] = time();
      return $this->principal();
    } else {
      return $this->login();
    }
  }
  //cerrar sesion
  function logout()
  {
    unset($_SESSION['ID_USUARIO']);
    unset($_SESSION['NOMBRE']);
    unset($_SESSION['USUARIO']);
    unset($_SESSION['CLAVE']);
    unset($_SESSION['NIVEL_RESPONSABILIDAD']);
    unset($_SESSION['EMAIL']);
    unset($_SESSION['hora_session']);
    session_destroy();
    return $this->login(NULL);
  }

  /* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
 INPUT
 $page | direccion de la pagina 
 OUTPUT
 STRING | devuelve un string con el codigo html cargado
 */
  private function load_page($page)
  {
    return file_get_contents($page);
  }

  /*Funcion para ver la pagina*/
  private function view_page($html)
  {
    echo $html;
  }
  private function replace_content($in = '/\#CONTENIDO\#/ms', $out, $pagina)
  {
    return preg_replace($in, $out, $pagina);
  }
}
