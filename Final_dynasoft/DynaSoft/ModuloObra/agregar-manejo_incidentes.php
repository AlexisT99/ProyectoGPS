<?php
    include ('conexionBD.php');
    include('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','index.php');
        return;
    }
    
    //if sirve para guardar datos en la BD
    if (isset($_POST["guardar"])) { 
        //$num1 = $_POST['Num_P1'];
        $Inc = $_POST['inc_I'];
        $Obr = $_POST['obr_I'];
        $Tra = $_POST['tra_I'];

        $equ = $_POST['equ_I'];
        $mat = $_POST['mat_I'];

        $Des = $_POST['des_I'];
        $Fec = $_POST['fec_I'];
        $Fot = $_POST['fot_I'];
        $Pet = "PENDIENTE";

        //echo $Fot;
        //echo $Inc."  ".$Obr."  ".$Tra."  ".$Des."  ".$Fec."  ".$Pu."  ".$Fot;
        //$imp = $_POST['Imp_P'];
        //$Tot = "0";
       // $imp = $can * $pu;
                                                                                                                      
        $sql = "insert into incidentes(ID_INCIDENTE,ID_OBRA,IDTRABAJADOR,ID_EQUIPO,ID_MATERIAL,DESCRIPCION_INCIDENTE,FECHA_INCIDENTE,ESTADO_PETICION,IMG_TICKET) values ('$Inc', '$Obr', '$Tra','$equ','$mat','$Des', '$Fec','$Pet', '$Fot')";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha agregado exitosamente','incidentes.php');
    }

    //if sirve para guardar datos en la BD
    if (isset($_POST["actualizar"])) { 
        $Inc = $_POST['inc_I'];
        $Obr = $_POST['obr_I'];
        $Tra = $_POST['tra_I'];

        $equ = $_POST['equ_I'];
        $mat = $_POST['mat_I'];

        $Des = $_POST['des_I'];
        $Fec = $_POST['fec_I'];
        $Fot = $_POST['fot_I'];

        //$imp = $can * $pu;
        $sql = "update incidentes set ID_OBRA= '$Obr', IDTRABAJADOR ='$Tra',DESCRIPCION_INCIDENTE='$Des'
        ,FECHA_INCIDENTE='$Fec',IMG_TICKET='$Fot', ID_EQUIPO='$equ', ID_MATERIAL='$mat'
        
        where ID_INCIDENTE='$Inc';";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha actualizado exitosamente','incidentes.php');

        //IMPORTE_NUMERO='$Tot' 
    }

    if (isset($_POST["borrar"])) { 
        
        $Inc = $_POST['inc_I'];
        $Obr = $_POST['obr_I'];
        $Tra = $_POST['tra_I'];
        $Des = $_POST['des_I'];
        $Fec = $_POST['fec_I'];
        $Fot = $_POST['fot_I'];
        
        
        $sql = "delete from incidentes where ID_INCIDENTE='$Inc';";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha eliminado exitosamente','incidentes.php');
    }

    if (isset($_POST["limpiar"])) { 
        
        redireccionarR('incidentes.php');
    }

    if (isset($_POST["buscar"])) { 
        $numLici = $_POST['numLici'];
        //redireccionarR('index.php');
        $sql = "select * from presupuesto where Numero='$numLici';";
        $resultado = mysqli_query($conexion,$sql);
        $total = 0;
        //include ('encabezado.php');

        echo '
                    <table border="2">
                        <htbody>
                            <tr>
                                <th>Numero</th>
                                <th>Norma</th>
                                <th width="400px">Concepto</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                                <th>P.U.</th>
                                <th>Importe</th>
                                <th>Total</th>
                                <th>Opción</th>
                            </tr>
                                ';

        while ($row = mysqli_fetch_array($resultado)) {

            $t1 =  $row['ID_PRESUPUESTO'];
            $t2 =  $row['NUMERO'];
            $t3 =  $row['NORMA'];
            $t4 =  $row['CONCEPTO_SERVICIO'];
            $t5 =  $row['UNIDAD'];
            $t6 =  $row['CANTIDAD'];
            $t7 =  $row['PU'];
            $t8 =  $row['IMPORTE_LETRA'];
            $t9 =  $row['IMPORTE_NUMERO'];
           
            //header('Location: index.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9);
                            echo '<tr><td>'.$t2.'</td>';
                            echo '<td>'.$t3.'</td>';
                            echo '<td>'.$t4.'</td>';
                            echo '<td>'.$t5.'</td>';
                            echo '<td>'.$t6.'</td>';
                            echo '<td>'.$t7.'</td>';
                            echo '<td>'.$t8.'</td>';
                            echo '<td>'.$t9.'</td>'; 
                            echo '<td> <input type="submit" style="font-weight: bold
                            ;background: rgb(10,126,29);margin: 1px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px"></td>';
                            echo '</tr>';
                            
                            $total = $total + $t9;
        }//while
        echo '          
                        </htbody>
                    </table>
                    </div>
                    </div>
                    <div>
            </body>
            </html>
        ';
        echo '<h3 margin:10px;>Total:  $'.$total.'</h3>';

    }

?>