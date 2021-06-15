<?php
    //conexion con la BD
    $conexion = mysqli_connect('localhost','root','','dynasoft');
    $query = "SELECT CODIGO_EQUIPO, DESCRIPCION_EQUIPO,DISPONIBLE FROM EQUIPO";
    $datos = mysqli_query($conexion,$query);
    if($datos->num_rows>0){
        while($fila=$datos->fetch_assoc()){
            $codigo_equipo = $fila['CODIGO_EQUIPO'];
            $descripcion   = $fila['DESCRIPCION_EQUIPO'];
            $disponible    = $fila['DISPONIBLE'];
?> 
           <tr>
                 <td style="width : 200px"><?=$codigo_equipo?></td>
                 <td style="width : 200px"><?=$descripcion?></td>
                 <td style="width : 100px"><?=$disponible?></td>
            </tr>
<?php               
        }//fin while
    }//fin if
?>