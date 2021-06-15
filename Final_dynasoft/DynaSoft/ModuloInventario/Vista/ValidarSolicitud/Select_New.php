<?php
$conexion = mysqli_connect("localhost","root","","inventario");
if($conexion){
    $consulta = "select * from Incidentes";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
           $Id_Inciden =$fila['ID_Incidente'];
           $Id_Material =$fila['ID_MATERIAL'];
           $CodigoE = $fila['Cofigo_Equipo'];
           $Estado =$fila['Estado'];
           $Id_Obra=$fila['ID_Obra'];
            
             
             ?>
             <tr>
                 <td style="width : 150px"><?=$Id_Inciden?></td>
                 <td style="width : 150px"><?= $Id_Material?></td>
                 <td style="width : 150px"><?=$CodigoE?></td>
                 <td style="width : 150px"><?=$Estado?></td>
                 <td style="width : 130px"><?=$Id_Obra?></td>
                
                 
                 
                 
                 
            </tr>
                <?php
        }
    }
}
