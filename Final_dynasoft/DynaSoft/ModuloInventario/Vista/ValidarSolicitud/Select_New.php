<?php
$conexion = mysqli_connect("localhost","root","","dynasoft");
if($conexion){
    $consulta = "SELECT ID_INCIDENTE,CODIGO_EQUIPO,ESTADO_PETICION,ID_OBRA FROM incidentes";
    $datos = $conexion->query($consulta);
        if($datos->num_rows>0){
            while($fila=$datos->fetch_assoc()){
                $Id_Inciden =$fila['ID_INCIDENTE'];
                $CodigoE = $fila['CODIGO_EQUIPO'];
                $Estado =$fila['ESTADO_PETICION'];
                $Id_Obra=$fila['ID_OBRA'];
            
             
             ?>
             <tr>
                 <td style="width : 150px"><?=$Id_Inciden?></td>
                 <td style="width : 130px"><?=$CodigoE?></td>
                 <td style="width : 90px"><?=$Estado?></td>
                 <td style="width : 100px"><?=$Id_Obra?></td>
                
                 
            </tr>
                <?php
        }
    }
}
