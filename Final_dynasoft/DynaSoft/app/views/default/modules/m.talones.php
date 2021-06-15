<div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Nomina</small></h1>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
        <h1 style="padding-bottom: 25px;">Mis talones de pago</h1>
        <div style="margin-bottom: 38px;margin-top: 20px;">
            <div class="table-responsive" style="margin: 0px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Numero de Pago</th>
                            <th>Fecha del pago</th>
                            <th>Inicio del periodo</th>
                            <th>Fin del periodo</th>
                            <th>Liquido</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?php echo $row['IDPAGO']; ?></td>
                                <td><?php echo $row['FECHA']; ?></td>
                                <td><?php echo $row['INICIOPERIODO']; ?></td>
                                <td><?php echo $row['FINPERIODO']; ?></td>
                                <td><?php echo $row['LIQUIDO']; ?></td>
                                <td><a href="index.php?action=verTalon&idPago=<?php echo $row['IDPAGO']; ?>"><button class="btn btn-primary" type="button" style="background: rgb(18,65,119);border-color: rgb(18,65,119);font-weight: bold;">Ver talon de pago</button></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>