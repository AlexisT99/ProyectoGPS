<?php
$conexion = mysqli_connect("localhost","root","","inventario");
if($conexion){
    $consulta = "select M.ID_MANTENIMIENTO,M.FECHA_PROX_M,S.ID_SEGURO,S.FECHA_VENCIDO,E.DESCRIPCION_EQUIPO from Equipo E 
    INNER JOIN Mantenimiento M ON E.CODIGO_EQUIPO = M.CODIGO_EQUIPO
    INNER JOIN Seguro S ON E.CODIGO_EQUIPO = S.CODIGO_EQUIPO";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
            $Id_man = $fila['ID_MANTENIMIENTO'];
            $fech_prox =$fila['FECHA_PROX_M'];
            $Id_S = $fila['ID_SEGURO'];
            $FechaV =$fila['FECHA_VENCIDO'];
            $Descri =$fila['DESCRIPCION_EQUIPO'];
             
             
             ?>
             <tr>
                 <td style="width : 150px"><?=$Id_man?></td>
                 <td style="width : 150px"><?= $fech_prox?></td>
                 <td style="width : 150px"><?=$Id_S?></td>
                 <td style="width : 150px"><?=$FechaV?></td>
                 <td style="width : 130px"><?=$Descri?></td>
                
                 
                 
                 
                 
            </tr>
                <?php

    
           

            }

}

}


?>
