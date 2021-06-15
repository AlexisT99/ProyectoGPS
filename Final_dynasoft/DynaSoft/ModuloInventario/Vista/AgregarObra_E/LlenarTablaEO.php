<?php
    //conexion con la BD
    $conexion = mysqli_connect('localhost','root','','dynasoft');
    $query = "SELECT E.CODIGO_EQUIPO,E.ID_OBRA,T.NOMBRETRAB FROM EQUIPO_OBRA E
              INNER JOIN TRABAJADORES T ON(T.IDTRABAJADOR = E.IDTRABAJADOR)";
    $datos = mysqli_query($conexion,$query);
    if($datos->num_rows>0){
        while($fila=$datos->fetch_assoc()){
            $codigo_equipo        = $fila['CODIGO_EQUIPO'];
            $id_obra              = $fila['ID_OBRA'];
            $nombre_trabajador    = $fila['NOMBRETRAB'];
?> 
           <tr>
                 <td style="width : 200px"><?=$codigo_equipo?></td>
                 <td style="width : 200px"><?=$id_obra?></td>
                 <td style="width : 100px"><?=$nombre_trabajador?></td>
            </tr>
<?php               
        }//fin while
    }//fin if
?>