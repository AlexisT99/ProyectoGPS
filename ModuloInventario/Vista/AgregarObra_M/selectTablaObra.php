<?php
$conexion = mysqli_connect("localhost","root","",'dynasoft');
if($conexion){
    $consulta = "SELECT ID_MATERIAL,ID_OBRA,NOMBRETRAB,CANTIDAD
    FROM material_obra
    INNER JOIN trabajadores ON material_obra.IDTRABAJADOR = trabajadores.IDTRABAJADOR;";
    
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
             $idMaterial =$fila['ID_MATERIAL'];
             $obra =$fila['ID_OBRA'];
             $nombre =$fila['NOMBRETRAB'];
             $Cantidad =$fila['CANTIDAD'];
             ?>
             <tr>
                 <td style="width : 100px"><?=$idMaterial?></td>
                 <td style="width : 150px"><?=$obra?></td>
                 <td style="width : 200px"><?=$nombre?></td>
                 <td style="width : 90px"><?=$Cantidad?></td>
                 
                 
                 
            </tr>
                <?php

    
           

            }

}

}


?>
