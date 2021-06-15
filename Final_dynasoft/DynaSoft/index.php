<?php
require 'app/controller/mvc.controller.php';
require 'app/model/seguridad.class.php';
     //se instancia al controlador 
 $mvc = new mvc_controller();
 $seguridad = new seguridad();
 error_reporting(E_ALL ^ E_NOTICE);
 if($error=$seguridad->restringir_session()) //muestra el login
 {
   echo $mvc->login($error);
 }
//Cerrar_sesion
 else if($_GET['action']=='logout'&&isset($_SESSION['USUARIO']))
 {
   echo $mvc->logout();
 }
 
 //Login action
 else if ($_GET['action']=='login'){
  echo $mvc->login_action($_POST['usuario'],$_POST['contraseña']);
  //si no hay sesión
 }
 else if ($_GET['action']=='viaticos'){
  echo $mvc->viaticos();
 }
 else if ($_GET['action']=='trabajadores'){
  echo $mvc->trabajadores();
 }
 else if ($_GET['action']=='solGas'){
  echo $mvc->solGas();
 }
 else if ($_GET['action']=='gasServ'){
  echo $mvc->gasServ();
 }
 else if ($_GET['action']=='prestamos'){
  echo $mvc->prestamos();
 }
 else if ($_GET['action']=='prestaciones'){
  echo $mvc->prestaciones();
 }
 else if ($_GET['action']=='servicios'){
  echo $mvc->servicios();
 }
 else if ($_GET['action']=='puestos'){
  echo $mvc->puestos();
 }
 else if ($_GET['action']=='nomina'){
  echo $mvc->genNom();
 }
 else if ($_GET['action']=='talones'){
  echo $mvc->talones();
 }
 else if ($_GET['action']=='verTalon'){
   $idpago=$_GET['idPago'];
  echo $mvc->verTalon($idpago);
 }
 else if ($_GET['action']=='ingresos'){
  echo $mvc->ingresos();
 }
 else if ($_GET['action']=='genIngPDF'){
   $fechaIni=$_POST['fechaInicio'];
   $fechaFin=$_POST['fechaFin'];
  echo $mvc->genInfIng($fechaIni,$fechaFin);
 }
 else if ($_GET['action']=='gastos'){
  echo $mvc->gastos();
 }
 else if ($_GET['action']=='genGasPDF'){
  $fechaIni=$_POST['fechaInicio'];
  $fechaFin=$_POST['fechaFin'];
 echo $mvc->genInfGas($fechaIni,$fechaFin);
}
else if ($_GET['action']=='iniModNom'){
  echo $mvc->inicioNomina();
 }
 else if ($_GET['action']=='inicio'){
  echo $mvc->principal();
 }
 else if(isset($_SESSION['USUARIO']))//muestra la pantalla princripal
 {
  echo $mvc->principal();
 }
 else{
  echo $mvc->login(NULL);
 }
?>