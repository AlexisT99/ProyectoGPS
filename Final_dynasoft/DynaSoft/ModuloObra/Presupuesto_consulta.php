<?php
    include ('conexionBD.php');
    include('utilerias.php');
    $conexion = conectar();
    if (!$conexion){
        redireccionar('ERROR DE CONEXION','index.php');
        return;
    }
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agregar_Presupuesto</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <!-- Start: Sidebar Menu -->
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
        <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="../index.php?action=inicio"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                        <li class="sidebar-brand";> <a href="obra-index.php"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 20px;">Modulo Obras</a>
                        <li> <a href="Presupuesto.php" style="color: rgb(255,255,255);font-size: 19px;">Presupuesto</a></li>
                <li> <a href="Obra.php" style="color: rgb(255,255,255);font-size: 19px;">Obra</a></li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestreo</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias&nbsp;</a></li>
                <li> <a href="ingresos.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button"
                    id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Presupuesto</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                

                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">

                <!--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
                
                <table border="2" style="text-align:center; " id="my_table" >
                        <htbody>
                            <tr class="rows" >
                                <th > ID_P. </th>
                                <th>Numero</th>
                                <th>Norma</th>
                                <th  width="200px">Cliente</th>
                                <th  width="200px">Quien Realizo</th>
                                <th width="600px">Concepto</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                                <th>P.U.</th>
                                <th>Importe</th>
                                <th>Total</th>
                                <th>Opción</th>
                            </tr>
                            <?php
                              if (isset($_POST["buscar"])) { 
                                    $numLici = $_POST['numLici'];
                                    //redireccionarR('index.php');
                                    $sql = "select * from CATALOGO_PRESUPUESTO where Numero='$numLici';";
                                    $resultado = mysqli_query($conexion,$sql);
                                    $total = 0;
                                    
                                
                                    while ($row = mysqli_fetch_array($resultado)) {

                                        $t1 =  $row['ID_PRESUPUESTO'];
                                        $t2 =  $row['NUMERO'];
                                        $t10 =  $row['QUIEN_CLIENTE'];
                                        $t11 =  $row['QUIEN_REALIZA'];
                                        $t3 =  $row['NORMA'];
                                        $t4 =  $row['CONCEPTO_SERVICIO'];
                                        $t5 =  $row['UNIDAD'];
                                        $t6 =  $row['CANTIDAD'];
                                        $t7 =  $row['PU'];
                                        $t8 =  $row['IMPORTE_LETRA'];
                                        $t9 =  $row['IMPORTE_NUMERO'];
            
                            //header('Location: index.php?t1='.$t1.'&t2='.$t2.'&t3='.$t3.'&t4='.$t4.'&t5='.$t5.'&t6='.$t6.'&t7='.$t7.'&t8='.$t8.'&t9='.$t9);
                                            echo '<tr>';
                                            echo '<td id="1">'.$t1.'</td>';
                                            echo '<td>'.$t2.'</td>';
                                            echo '<td>'.$t3.'</td>';
                                            echo '<td>'.$t10.'</td>';
                                            echo '<td>'.$t11.'</td>';
                                            echo '<td>'.$t4.'</td>';
                                            echo '<td>'.$t5.'</td>';
                                            echo '<td>'.$t6.'</td>';
                                            echo '<td>'.$t7.'</td>';
                                            echo '<td>'.$t8.'</td>';
                                            echo '<td>'.$t8.'</td>'; 
                                            echo '<td > <input type="submit";  onclick="myFunction()"; style="font-weight: bold
                                            ;background: rgb(10,126,29);margin: 1px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px"></td>';
                                            echo '</tr>';
                                          
                                        $total = $total + $t8;
                                     }//while
                                     echo '</table>';
                                     echo '<h3 style="padding-left: 30px;padding-top: 30px; padding-bottom: 30px;">Total:  $'.$total.'</h3>';
                            }//if
                            
                            ?>    
                            </htbody>
                    
                            <script >
                                function myFunction(){
                                    if (!document.getElementsByTagName || !document.createTextNode) return;
                                    var rows = document.getElementById('my_table').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                                    for (i = 0; i < rows.length; i++) {
                                      
                                      rows[i].onclick = function() {
                                         var $t1 = this.getElementsByTagName('td')[0].innerHTML;
                                         var $t2 = this.getElementsByTagName('td')[1].innerHTML;
                                         var $t3 = this.getElementsByTagName('td')[2].innerHTML;
                                         var $t10 = this.getElementsByTagName('td')[3].innerHTML;
                                         var $t11 = this.getElementsByTagName('td')[4].innerHTML;
                                         var $t4 = this.getElementsByTagName('td')[5].innerHTML;
                                         var $t5 = this.getElementsByTagName('td')[6].innerHTML;
                                         var $t6 = this.getElementsByTagName('td')[7].innerHTML;
                                         var $t7 = this.getElementsByTagName('td')[8].innerHTML;
                                         var $t8 = this.getElementsByTagName('td')[9].innerHTML;
                                         var $t9 = this.getElementsByTagName('td')[10].innerHTML;
                                         
                                    //alert((this.rowIndex + 1)+result); 
                                    location.href ="Presupuesto.php?t1="+$t1+"&t2="+$t2+"&t3="+$t3+"&t4="+$t4+"&t5="+$t5+"&t6="+$t6+"&t7="+$t7+"&t8="+$t8+"&t9="+$t9+"&t10="+$t10+"&t11="+$t11;
                                    //header('Location: index.php?t1=');  
                            }
                            }
                                }//funcion
                            </script>

                 <!--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
                 <input type="submit"  onclick="myFunctionRegre()" value="Regresar" style="font-weight: bold 
                                            ;background: rgb(10,126,29);margin: 1px;width: 91px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                 <script >
                        function myFunctionRegre(){
                                location.href ="Presupuesto.php";
                        }
                </script>

                <hr color="black";>
                <br>
                <br>
                <input type="submit"  onclick="myFunctionObras()" value="Convertir Obra" style="font-weight: bold 
                                            ;background: rgb(146,0,0);margin: 1px;width: 150px; height:40px; border:1px solid rgb(0,123,255); color:white; border-radius:5px">
                
                <script >
                        function myFunctionObras(){
                            alert("Se manda a Obras");
                        }//funcion
                </script>
                
                
                
                </div>
                </div><!-- Start: Pretty Footer -->

                
                <footer>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 footer-navigation">
                            <h3><a href="#">Company<span>logo </span></a></h3>
                            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> ·
                                </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> ·
                                </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                            <p class="company-name">Company Name © 2015 </p>
                        </div>
                        <div class="col-sm-6 col-md-4 footer-contacts">
                            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                                <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                            </div>
                            <div><i class="fa fa-phone footer-contacts-icon"></i>
                                <p class="footer-center-info email text-left"> +1 555 123456</p>
                            </div>
                            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                                <p> <a href="#" target="_blank">support@company.com</a></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4 footer-about">
                            <h4>About the company</h4>
                            <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit,
                                eu auctor lacus vehicula sit amet. </p>
                            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a
                                    href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                        class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </footer><!-- End: Pretty Footer -->
            </div>
        </div>
    </div><!-- End: Sidebar Menu -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>