<?php
    require 'Seguro.php';
    require 'Mantenimiento.php';
    require 'Equipo.php';
    $conexion=mysqli_connect('localhost','root','','inventario');

    $equipo = new Equipo( $_POST["txtCodigo"],
                     $_POST["txtDescripcion"],
                     $_POST["txtCaracteristicas"],
                     $_POST["txtMarca"],
                     $_POST["txtModelo"],
                     $_POST["txtPrecio"],
                     $_POST["cmbTipo"]);
    $mantenimiento = new Mantenimiento($_POST["txtProveedor"],
                     $_POST["txtFechaPM"],
                     $_POST["cmbEstado"],
                     $_POST["txtObservaciones"],
                     $_POST["cmbTipo"],
                     $_POST["txtPrecio"],
                     $_POST["txtCodigo"]);
    $seguro = new Seguro($_POST["txtSeguro"],
                     $_POST["txtCodigo"],
                     $_POST["txtFechaV"],
                     $_POST["txtCostoS"]);
                     
                     

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['guardar'])){
        if(($equipo->getCodigoEquipo())!=""){
            $equipo->insertar();
            $equipo->insertarGasto();
        }
        if(($mantenimiento->getProveedor())!=""){
            if(($mantenimiento->getFechaProximaM())!=""){
                $mantenimiento->insertar();
                $mantenimiento->insertarGastoM();
            }
        }
        if(($seguro->getIdSeguro())!=""){
            if(($seguro->getFechaVencido())!=""){
                if(($seguro->getCostoSeguro())!=""){
                    $seguro->insertar();
                    $seguro->insertarGastoS();
                }
            }
        }
        
        header("Location: AgregarEquipo/index.php");
    } 
?>