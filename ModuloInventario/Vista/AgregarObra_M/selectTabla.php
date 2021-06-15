<?php
$conexion = mysqli_connect("localhost","root","",'dynasoft');
if($conexion){
    $consulta = "select ID_MATERIAL,DESCRIPCION,CANTIDAD_MATERIAL from MATERIAL ";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
             $idMaterial =$fila['ID_MATERIAL'];
             $descripcion =$fila['DESCRIPCION'];
             $Cantidad =$fila['CANTIDAD_MATERIAL'];
             ?>
             <tr>
                 <td style="width : 100px"><?=$idMaterial?></td>
                 <td style="width : 130px"><?=$descripcion?></td>
                 <td style="width : 90px"><?=$Cantidad?></td>
                 
                 
                 
            </tr>
                <?php

    
           

            }

}

}


?>
