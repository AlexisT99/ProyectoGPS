<?php
$conexion = mysqli_connect("localhost","root","","inventario");
if($conexion){
    $consulta = "SELECT E.CODIGO_EQUIPO,E.DESCRIPCION_EQUIPO,E.CARACTERISTICAS,E.MARCA_EQUIPO,E.MODELO_EQUIPO, E.TIPO_EQUIPO FROM Equipo E";
    $datos = mysqli_query($conexion,$consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
             $CofigoEquipo =$fila['CODIGO_EQUIPO'];
             $descripcion =$fila['DESCRIPCION_EQUIPO'];
             $CARACTERISTICAS =$fila['CARACTERISTICAS'];
             $MARCA_EQUIPO =$fila['MARCA_EQUIPO'];
             $MODELO_EQUIPO=$fila['MODELO_EQUIPO'];
             $TIPO_EQUIPO=$fila['TIPO_EQUIPO'];
             ?>
             <tr>
                 <td style="width : 100px"><?=$CofigoEquipo?></td>
                 <td style="width : 130px"><?=$CARACTERISTICAS?></td>
                 <td style="width : 70px"><?=$MARCA_EQUIPO?></td>
                 <td style="width : 80px"><?=$MODELO_EQUIPO?></td>
                 <td style="width : 60px"><?=$TIPO_EQUIPO?></td>
                 <td style="width : 110px"><?=$descripcion?></td>
            </tr>
                <?php

    
           

            }

}

}


?>