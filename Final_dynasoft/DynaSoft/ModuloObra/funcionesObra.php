<?php
    include ('conexionBD.php');
    include ('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','Obra.php');
        return;
    }


     //En esta sección se guardan los datos en la base de datos--------------------
    if (isset($_POST["Guardar"])) { 
        $idObra = $_POST['txtId'];
        $Nombre = $_POST['txtNombre'];
        $Encargado = $_POST['txtEncargado'];
        $Contratista = $_POST['txtContratista'];
        $telContratista = $_POST['txtTelContra'];
        $Lugar = $_POST['txtLugar'];
        $FechaInicio = $_POST['txtFechaIni'];
        $FechaFin = $_POST['txtFechaFin'];
        $Costo = $_POST['txtCosto'];
        $Estado = $_POST['txtEstado'];
        $Descripcion = $_POST['txtDescripcion'];
         
        $sql = "insert into Registro_Obras(Id_Obra,Nombre,idTrabajador,Descripcion,Contratista_Nombre,Tel_Contratista,Lugar_Desarrollo,Fecha_Inicio_obra,Fecha_Final_obra,Status_Obra,Costo) values ('$idObra','$Nombre','$Encargado','$Descripcion','$Contratista','$telContratista','$Lugar','$FechaInicio','$FechaFin','$Estado','$Costo')";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('Obra.php');   
    }

    if (isset($_POST["Actualizar"])) { 
        
        $idObra = $_POST['txtId'];
        ECHO $idObra;
        $Nombre = $_POST['txtNombre'];
        ECHO $Nombre;
        $Encargado = $_POST['txtEncargado'];
        ECHO $Encargado;
        $Contratista = $_POST['txtContratista'];
        ECHO $Contratista;
        $telContratista = $_POST['txtTelContra'];
        ECHO $telContratista;
        $Lugar = $_POST['txtLugar'];
        ECHO $Lugar;
        $FechaInicio = $_POST['txtFechaIni'];
        ECHO $FechaInicio;
        $FechaFin = $_POST['txtFechaFin'];
        ECHO $FechaFin;
        $Costo = $_POST['txtCosto'];
        ECHO $Costo;
        $Estado = $_POST['txtEstado'];
        ECHO $Estado;
        $Descripcion = $_POST['txtDescripcion'];
        ECHO $Descripcion;
         
        $sql = "UPDATE Registro_Obras SET Nombre = '$Nombre', idTrabajador = $Encargado, Descripcion = '$Descripcion', 
                    Contratista_Nombre = '$Contratista', Tel_Contratista = '$telContratista', Lugar_Desarrollo = '$Lugar',
                    Fecha_Inicio_obra = '$FechaInicio', Fecha_Final_obra = '$FechaFin', Status_Obra = '$Estado', Costo = $Costo   
                WHERE Id_Obra = '$idObra' ";
        
        
        /*
        UPDATE Registro_Obras SET Nombre = '$Nombre', idTrabajador = $Encargado, Descripcion = '$Descripcion', 
                    Contratista_Nombre = '$Contratista', Tel_Contratista = '$telContratista', Lugar_Desarrollo = '$Lugar',
                    Fecha_Inicio_obra = '$FechaInicio', Fecha_Final_obra = '$FechaFin', Status_Obra = '$Estado', Costo = $Costo   
                WHERE Id_Obra = '$idObra'"
         */  
            
            /*IF EXISTS (SELECT Id_Obra FROM Registro_Obras WHERE Id_Obra = '$idObra' )
            BEGIN TRY
            insert into Registro_Obras(Id_Obra,Nombre,idTrabajador,Descripcion,Contratista_Nombre,Tel_Contratista,Lugar_Desarrollo,Fecha_Inicio_obra,Fecha_Final_obra,Status_Obra,Costo) values ('$idObra','$Nombre','$Encargado','$Descripcion','$Contratista','$telContratista','$Lugar','$FechaInicio','$FechaFin','$Estado','$Costo')
            END TRY
            BEGIN CATCH
            UPDATE Registro_Obras SET Nombre = '$Nombre', idTrabajador = $Encargado, Descripcion = '$Descripcion', 
            Contratista_Nombre = '$Contratista', Tel_Contratista = '$telContratista', Lugar_Desarrollo = '$Lugar',
            Fecha_Inicio_obra = $FechaInicio, Fecha_Final_obra = '$FechaFin', Status_Obra = '$Estado', Costo = $Costo   
            WHERE Id_Obra = '$idObra'
            END CATCH" */
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        
        redireccionarR('Obra.php');   
    }


    
    if (isset($_POST["Buscar"])) { 
        
        $Nombre = $_POST['txtBuscar'];
        
        
         
        $sql="SELECT Id_Obra,Nombre,idTrabajador,Lugar_Desarrollo,Status_Obra FROM `Registro_Obras` where Nombre LIKE '$Nombre'";
         $result = mysqli_query($conexion,$sql);
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('Obra.php');   
    }

    if (isset($_POST["Eliminar"])) { 
        echo 'Hola';
        /*
        $idObra = $_REQUEST['t1'];
        
        $sql = "DELETE FROM Registro_Obras WHERE Id_Obra='$idObra'";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionarR('Obra.php');*/    
    }


?>
