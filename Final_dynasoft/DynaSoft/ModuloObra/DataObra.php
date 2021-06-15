<?php 
    include ('conexionBD.php');
    include ('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','Obra.php');
        return;
    }


    
        $t1 = "Pollo";
        $t2 = "Pollo";
        $t3 = "";
        $t4 = "";
        $t5 = "";
        $t6 = "";
        $t7 = "";
        $t8 = "";
        $t9 = "";
        $t10 = "";
        $t11 = "";
        $idObra = $_REQUEST['t1'];
        
        $sql = "SELECT Id_Obra,Nombre,idTrabajador,Descripcion,Contratista_Nombre,Tel_Contratista,Lugar_Desarrollo,Fecha_Inicio_obra,Fecha_Final_obra,Status_Obra,Costo FROM Registro_Obras where Id_Obra='$idObra'";
        $resultado = mysqli_query($conexion,$sql);
        
        
        while ($mostrar=mysqli_fetch_array($resultado)){
            
            $t1=$mostrar['Id_Obra'];
            $t2=$mostrar['Nombre'];
            $t3=$mostrar['idTrabajador'];
            $t4=$mostrar['Descripcion'];
            $t5=$mostrar['Contratista_Nombre'];
            $t6=$mostrar['Tel_Contratista'];
            $t7=$mostrar['Lugar_Desarrollo'];
            $t8=$mostrar['Fecha_Inicio_obra'];
            $t9=$mostrar['Fecha_Final_obra'];
            $t10=$mostrar['Status_Obra'];
            
            $t11=$mostrar['Costo'];
            
        }
        
        mysqli_close($conexion);
        
        
        header('Location: Obra.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9.'&t10='.$t10.'&t11='.$t11);
        //redireccionarR('Obra.php?t1=');
        //location.href='Obra.php?t1='+t1+'t2='+t2+'t3='+t3+'t4='+t4+'t5='+t5+'t6='+t6+'t7='+t7+'t8='+t8+'t9='+t9+'t10='+t10+'t11='+t11;  
    
?>