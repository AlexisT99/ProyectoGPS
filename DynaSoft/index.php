<?php
require 'app/controller/mvc.controller.php';
require 'app/model/seguridad.class.php';
     //se instancia al controlador 
 $mvc = new mvc_controller();
 $seguridad = new seguridad();
 error_reporting(E_ALL ^ E_NOTICE);
 if($error=$seguridad->restringir_session()) //muestra el login
 {
   echo "prueba";
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
 else if(isset($_SESSION['USUARIO']))//muestra la pantalla princripal
 {
  echo $mvc->principal();
 }
 else{
  echo $mvc->login(NULL);
 }
?>