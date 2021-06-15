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
        $Pre = $_POST['Pre_P'];
        $num = $_POST['Num_p'];
        $nor = $_POST['Nor_P'];
        $con = $_POST['Con_P'];
        $uni = $_POST['Uni_P'];
        $can = $_POST['Can_P'];
        $pu = $_POST['Pu_P'];
        $cli = $_POST['Cliente'];
        $qui = $_POST['Quien'];
        //$imp = $_POST['Imp_P'];
        $Tot = "0";
        $imp = $can * $pu;
        
        $sql = "insert into CATALOGO_PRESUPUESTO(ID_PRESUPUESTO,NUMERO,NORMA,CONCEPTO_SERVICIO,UNIDAD,CANTIDAD,PU,IMPORTE_LETRA,IMPORTE_NUMERO,QUIEN_CLIENTE,QUIEN_REALIZA) values ('$Pre','$num', '$nor', '$con', '$uni', '$can','$pu', '$imp','$Tot','$cli','$qui')";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha agregado exitosamente','Presupuesto.php');
    }

    //if sirve para guardar datos en la BD
    if (isset($_POST["actualizar"])) { 
        //$num1 = $_POST['Num_P1'];
        $Pre = $_POST['Pre_P'];
        $num = $_POST['Num_p'];
        $nor = $_POST['Nor_P'];
        $con = $_POST['Con_P'];
        $uni = $_POST['Uni_P'];
        $can = $_POST['Can_P'];
        $pu = $_POST['Pu_P'];
        $cli = $_POST['Cliente'];
        $qui = $_POST['Quien'];
        //$imp = $_POST['Imp_P'];
        //$Tot = $_POST['Tot_P'];
        $imp = $can * $pu;
        $sql = "update CATALOGO_PRESUPUESTO set NORMA = '$nor', CONCEPTO_SERVICIO ='$con',UNIDAD='$uni'
        ,CANTIDAD='$can',PU='$pu',IMPORTE_LETRA='$imp',QUIEN_CLIENTE='$cli',QUIEN_REALIZA='$qui'
        
        where ID_PRESUPUESTO='$Pre';";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha actualizado exitosamente','Presupuesto.php');

        //IMPORTE_NUMERO='$Tot' 
    }

    if (isset($_POST["borrar"])) { 
        //$num1 = $_POST['Num_P1'];
        $Pre = $_POST['Pre_P'];
        $num = $_POST['Num_p'];
        $nor = $_POST['Nor_P'];
        $con = $_POST['Con_P'];
        $uni = $_POST['Uni_P'];
        $can = $_POST['Can_P'];
        $pu = $_POST['Pu_P'];
        $cli = $_POST['Cliente'];
        $qui = $_POST['Quien'];
        //$imp = $_POST['Imp_P'];
        //$Tot = $_POST['Tot_P'];
        
        $sql = "delete from CATALOGO_PRESUPUESTO where ID_PRESUPUESTO='$Pre';";
        $resultado = mysqli_query($conexion,$sql);
        mysqli_close($conexion);
        redireccionar('Se ha eliminado exitosamente','Presupuesto.php');
    }

    if (isset($_POST["limpiar"])) { 
        
        redireccionarR('presupuesto.php');
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