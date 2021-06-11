<?php
$conexion = mysqli_connect("localhost","root","","inventario");
if($conexion){
    $consulta = "select * from Materiales";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
             $idMaterial =$fila['ID_MATERIAL'];
             $Nombre =$fila['NOMBRE_MATERIAL'];
             $Cantidad =$fila['CANTIDAD_MATERIAL'];
             $unidad =$fila['UNIDAD_MEDIDA'];
             $fechaV =$fila['FECHA_VENCIDO'];
             $descripcion =$fila['DESCRIPCION'];
             ?>
             <tr>
                 <td style="width : 100px"><?=$idMaterial?></td>
                 <td style="width : 80px"><?=$Nombre?></td>
                 <td style="width : 90px"><?=$Cantidad?></td>
                 <td style="width : 80px"><?=$unidad?></td>
                 <td style="width : 150px"><?=$fechaV?></td>
                 <td style="width : 130px"><?=$descripcion?></td>
                 
                 
                 
            </tr>
                <?php

    
           

            }

}

}


?>