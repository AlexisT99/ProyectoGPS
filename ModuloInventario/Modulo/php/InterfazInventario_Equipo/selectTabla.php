<?php
$conexion = mysqli_connect("localhost","root","","inventario");
if($conexion){
    $consulta = "select E.CODIGO_EQUIPO,M.Estado,S.Fecha_Vencido from Equipo E 
    INNER JOIN Mantenimiento M ON E.CODIGO_EQUIPO = M.CODIGO_EQUIPO
    INNER JOIN Seguro S ON E.CODIGO_EQUIPO = S.CODIGO_EQUIPO";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
             $CodigoEquipo =$fila['CODIGO_EQUIPO'];
             $Estado =$fila['Estado'];
             $FechaV =$fila['Fecha_Vencido'];
             
             ?>
             <tr>
                 <td style="width : 150px"><?=$CodigoEquipo?></td>
                 <td style="width : 130px"><?=$Estado?></td>
                 <td style="width : 150px"><?=$FechaV?></td>
                 
                 
                 
                 
            </tr>
                <?php

    
           

            }

}

}


?>
