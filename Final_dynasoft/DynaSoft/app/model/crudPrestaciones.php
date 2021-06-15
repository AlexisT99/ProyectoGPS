<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id_prestaciones = (isset($_POST['id_prestaciones'])) ? $_POST['id_prestaciones'] : '';
$prestVal = (isset($_POST['prestVal'])) ? $_POST['prestVal'] : '';
$prestNom = (isset($_POST['prestNom'])) ? $_POST['prestNom'] : '';
$prestDes = (isset($_POST['prestDes'])) ? $_POST['prestDes'] : '';
$prestCat = (isset($_POST['prestCat'])) ? $_POST['prestCat'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
switch($opcion){
    case 1:
        $consulta = "INSERT INTO prestaciones (IDCATPRESTACION,NOMBREPRES,DESCRIPCIONPRES,VALORMUL)VALUES('$prestCat', '$prestNom', '$prestDes', '$prestVal')";
        //ChromePhp::log($_POST['nombre']);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM prestaciones ORDER BY IDPRESTACION DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE prestaciones SET IDCATPRESTACION ='$prestCat', NOMBREPRES='$prestNom', DESCRIPCIONPRES='$prestDes', VALORMUL='$prestVal'WHERE IDPRESTACION='$id_prestaciones' ";		
        ChromePhp::log($consulta);
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta ="SELECT * FROM prestaciones p INNER JOIN cat_prestacion cp ON p.IDCATPRESTACION = cp.IDCATPRESTACION "; 
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM prestaciones WHERE IDPRESTACION='$id_prestaciones' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM prestaciones p INNER JOIN cat_prestacion cp ON p.IDCATPRESTACION = cp.IDCATPRESTACION ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

