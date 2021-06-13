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

    <!-- Aquí se inserta la tabla-->
    <div class="table-responsive" style="padding: 0px 20px 0px;">
        <h1>Lista de pagos</h1>
        <table id="tablaGenNom" class="table table-striped table-bordered table-condensed" style="width:100%;">
            <button id="btnNuevoNom" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>Fecha del pago</th>
                    <th>Inicio del periodo</th>
                    <th>Fin del periodo</th>
                    <th>Observaciones</th>
                    <th>Percepciones</th>
                    <th>Descuentos</th>
                    <th>Líquido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- Aquí se acaba la inserción de la tabla-->


    <!--Modal para crudGenerarNom-->

    <div class="modal fade" role="dialog" tabindex="-1" id="modalCRUDGenNom">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Generar nómina</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formGenNomina"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6" id="message">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha del pago</label>
                                    <?php $fcha = date("Y-m-d"); ?>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span><input class="form-control" type="date" id="fecha_pago" required="" value="<?php echo $fcha; ?>"></div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Inicio del periodo</label>
                                    <div class="input-group"><span class="input-group-text"><i class="material-icons">subdirectory_arrow_right</i></span><input class="form-control" type="date" id="inicio_periodo" required=""></div>
                                </div>
                                <hr class="d-flex d-md-none">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Fin del periodo</label>
                                    <div class="input-group"><span class="input-group-text"><i class="material-icons">subdirectory_arrow_left</i></span><input class="form-control" type="date" id="fin_periodo" required=""></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6" id="message-1">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Observaciones</label>
                                    <div class="input-group"><span class="input-group-text"><i class="far fa-comment-alt"></i></span><input class="form-control" type="text" id="observaciones"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Enviar<i class="fa fa-chevron-circle-right"></i></button></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>