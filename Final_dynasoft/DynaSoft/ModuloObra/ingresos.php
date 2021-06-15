<?php
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    
        $id = (!empty ($_GET['t2']) ) ? $_GET['t2'] : NULL; 
        if ( $id ) {                                                                                              #3
            $t1= $_GET['t1'];
            $t2= $_GET['t2'];
        } else {
            $t1="";
            $t2="";
        }
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ingresos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: rgb(19,46,77);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="../index.php?action=inicio"
                style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;">DynaSoft</a></li>
                <li class="sidebar-brand";> <a href="obra-index.php"
                        style="font-weight: bold;color: rgb(255,255,255);font-size: 20px;">Modulo Obras</a>
                <li> <a href="Presupuesto.php" style="color: rgb(255,255,255);font-size: 19px;">Presupuesto</a></li>
                <li> <a href="Obra.php" style="color: rgb(255,255,255);font-size: 19px;">Obras</a></li>
                <li> <a href="Incidentes.php" style="color: rgb(255,255,255);font-size: 19px;">Incidentes</a></li>
                <li> <a href="muestreo_Concreto_Principal.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de muestras</a></li>
                <li> <a href="resistencias.php" style="color: rgb(255,255,255);font-size: 19px;">Informe de resistencias</a></li>
                <li> <a href="ingresos.php" style="color: rgb(255,255,255);font-size: 19px;">Ingresos</a><a href="ingresos_1.php"
                        style="color: rgb(255,255,255);font-size: 16px;margin: 0px;padding: 5px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 15px;">Agregar</a>
                </li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button"
                    id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Módulo&nbsp;<small>Obras</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
                <form action="manejo_ingresos.php" method="post" >
                    <h1 style="padding-bottom: 25px;">Ingresos a obras</h1>
                    <p style="padding-bottom: 0px;width: 700px;"><label class="text-nowrap"
                            style="padding-right: 69px;width: 100px;">IdObra</label><input type="text" name="nom_obra"
                            style="width: 570px;" value='<?php echo $t2; ?>'><label style="padding: 0px;padding-right: 8px;"></label></p>
                    <p class="text-right" style="width: 670px;">
                        <input type="submit" value="Buscar" name="buscar" class="btn btn-primary" style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;height: 38px;">
                        <a href="ingresos_1.php"class="btn btn-primary" role="button"
                                style="font-weight: bold;background: #124177;width: 91px;color: rgb(255, 255, 255);text-align: center;margin: 13px;height: 38px;">Añadir</a>
                        <input type="submit" value="Limpiar" name="limpiar" class="btn btn-primary" style="font-weight: bold;background: var(--white);width: 91px;color: rgb(18,65,119);border-color: rgb(18,65,119);">
                    </p>
                    </form>
                    <div class="table-responsive">
                        <table id="my_table" class="table">
                            <thead>
                                <tr>
                                    <th>IdIngreso</th>
                                    <th>IdObra</th>
                                    <th class="text-nowrap">Fecha ingreso</th>
                                    <th>Cantidad</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include ('conexionBD.php');
                                $conexion = conectar();
                                $sql = "select IDINGRESO, ID_OBRA, FECHAINGRESO, MONTO_INGRESO from ingresos where ID_OBRA ='$t2'";
                                $result = mysqli_query($conexion,$sql);

                                while($mostrar=mysqli_fetch_array($result)){
                                    
                            ?>
                                    <tr>
                                        <td><?php echo $mostrar['IDINGRESO']; ?></td>
                                        <td><?php echo $mostrar['ID_OBRA']; ?></td>
                                        <td><?php echo $mostrar['FECHAINGRESO']; ?></td>
                                        <td><?php echo $mostrar['MONTO_INGRESO']; ?></td>
                                        <td>
                                            <input type="submit"  value="Ver ingreso" name="veringreso" onclick="myFunction()" class="btn btn-primary text-nowrap" style="background: #124177;font-weight: bold;width: 115px;border-color: rgb(143,0,0);">
                                            <input type="submit"  value="Eliminar" onclick="myFunction2()" class="btn btn-primary text-nowrap" style="background: rgb(143,0,0);font-weight: bold;width: 90px;border-color: rgb(143,0,0);">
                                        </td>
                                    <tr>
                                    <?php
                                    }
                                        mysqli_close($conexion); 
                                    ?>
                            </tbody>
                        </table>
                        <script>
                            function myFunction(){
                                if (!document.getElementsByTagName || !document.createTextNode) return;
                                var rows = document.getElementById('my_table').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                                for (i = 0; i < rows.length; i++) {
                                
                                rows[i].onclick = function() {
                                        var $s1 = this.getElementsByTagName('td')[0].innerHTML;
                                        var $s2 = this.getElementsByTagName('td')[1].innerHTML;
                                        var $s3 = this.getElementsByTagName('td')[2].innerHTML;
                                        var $s4 = this.getElementsByTagName('td')[3].innerHTML;
                                    
                                        console.log($s1);
                                        //alert((this.rowIndex + 1)+result); 
                                        //header('Location:manejo_informe.php?s1='.$s1);  
                                        location.href ="ingresos_1.php?s1="+$s1;
                                    }
                                }
                            }//funcion
                            function myFunction2(){
                                if (!document.getElementsByTagName || !document.createTextNode) return;
                                var rows = document.getElementById('my_table').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                                for (i = 0; i < rows.length; i++) {
                                
                                rows[i].onclick = function() {
                                        var $s1 = this.getElementsByTagName('td')[0].innerHTML;
                                        var $s2 = this.getElementsByTagName('td')[1].innerHTML;
                                        var $s3 = this.getElementsByTagName('td')[2].innerHTML;
                                        var $s4 = this.getElementsByTagName('td')[3].innerHTML;
                                    
                                        console.log($s1);
                                        //alert((this.rowIndex + 1)+result); 
                                        //header('Location:manejo_informe.php?s1='.$s1);  
                                        location.href ="manejo_ingresos.php?s1="+$s1;
                                    }
                                }
                            }//funcion
                        </script>
                    </div>
                </div>
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
                </footer>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>