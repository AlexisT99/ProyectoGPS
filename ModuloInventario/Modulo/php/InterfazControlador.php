<?php
require 'Seguro.php';
require 'Mantenimiento.php';
require 'Equipo.php';


    //variables
    //($codigo_equipo,$descripcion,$caracteristicas,$marca,$modelo,$tipo)
    $equipo = new Equipo($_POST['txtCodigo'],$_POST['txtDescripcion'],$_POST['txtCaracteristica'],
    $_POST['txtMarca'],$_POST['txtModelo'],$_POST['cmbTipo']);
    
    //($id_seguro,$codigo_equipo,$fecha_vencido,$costo_seguro)
    $seguro = new Seguro($_POST['txtSeguro'],$_POST['txtCodigo'],$_POST['txtFechaV'],$_POST['txtCosto']);

    //($proveedor,$fecha_prox_m,$estado,$observaciones,$tipo_servicio,$codigo_equipo)
    $mantenimiento = new Mantenimiento($_POST['txtProveedor'],$_POST['txtFechaPM'],$_POST['cmbEstado']
    ,$_POST['txtObservaciones'],$_POST['txtTipoServicio'],$_POST['txtCodigo']);

    /*Condiciones para agregar a mantenimiento o a seguro */
    if(($mantenimiento->getProveedor())==""){
        if(($seguro->getIdSeguro())==""){
            $equipo->insertar();
        }
        
    }
    



?>