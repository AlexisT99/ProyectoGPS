<?php
$conexion = mysqli_connect("localhost","root","","inventario");
if($conexion){
    $consulta = "select E.CODIGO_EQUIPO,E.DESCRIPCION_EQUIPO,E.CARACTERISTICAS,E.MARCA_EQUIPO,E.MODELO_EQUIPO, E.TIPO_EQUIPO,M.ESTADO from Equipo E INNER JOIN Mantenimiento M ON E.CODIGO_EQUIPO = M.CODIGO_EQUIPO";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
             $CofigoEquipo =$fila['CODIGO_EQUIPO'];
             $descripcion =$fila['DESCRIPCION_EQUIPO'];
             $CARACTERISTICAS =$fila['CARACTERISTICAS'];
             $MARCA_EQUIPO =$fila['MARCA_EQUIPO'];
             $MODELO_EQUIPO=$fila['MODELO_EQUIPO'];
             $TIPO_EQUIPO=$fila['TIPO_EQUIPO'];
             $ESTADO =$fila['ESTADO'];
             ?>
             <tr>
                 <td style="width : 100px"><?=$CofigoEquipo?></td>
                 <td style="width : 130px"><?=$CARACTERISTICAS?></td>
                 <td style="width : 70px"><?=$MARCA_EQUIPO?></td>
                 <td style="width : 80px"><?=$MODELO_EQUIPO?></td>
                 <td style="width : 60px"><?=$TIPO_EQUIPO?></td>
                 <td style="width : 70px"><?=$ESTADO?></td>
                 <td style="width : 130px"><?=$descripcion?></td>
                 
                 
                 
            </tr>
                <?php

    
           

            }

}

}


?>