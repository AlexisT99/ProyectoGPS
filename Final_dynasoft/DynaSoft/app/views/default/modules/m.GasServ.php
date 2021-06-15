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
        <h1>Lista de Gastos de servicios</h1>
        <table id="tablaGenGasServ" class="table table-striped table-bordered table-condensed" style="width:100%;">
            <button id="btnNuevoGastoServicio" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>Nombre del trabajador</th>
                    <th> </th>
                    <th>Fecha del gasto</th>
                    <th>Monto</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- Aquí se acaba la inserción de la tabla-->


    <!--Modal para crudGenerarVia-->


    <div class="modal fade" role="dialog" tabindex="-1" id="modalGasServ">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <h4 style="text-align: center;">Generar Gasto de Servicios</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="GasServForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12 col-xl-12 offset-md-3 offset-lg-0 offset-xl-0" id="message">
                                <div class="form-group mb-3"><label class="form-label" for="from-phone">Nombre de trabajador</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span>
                                        <select class="form-select" id="gasServNombre" name="call time">
                                            <!--Aquí poblamos el select -->
                                            <?php foreach ($data as $row): ?>
                                                <!-- Le decimos que campo fue tomado desle la bd-->
                                                <option value="<?php echo $row["IDTRABAJADOR"] ?>"><?php echo $row["NOMBRETRAB"] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha del Gasto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        <input class="form-control" id="fechaGasServ" name="name" placeholder type="date" />
                                    </div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Descripcion del Gasto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="material-icons">description</i></span>
                                        <input class="form-control" id="descGasServ" name="name" placeholder type="text" />
                                    </div>
                                </div>
                                <button class="btn btn-primary d-block w-100" type="submit" style="width: 600px;">Enviar<i class="fa fa-chevron-circle-right"></i></button>
                                <hr class="d-flex d-md-none" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal inception  -->

    <div role="dialog" tabindex="-1" class="modal fade show" id="modalInceptionServ" data-backdrop="static">>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Visualizar gastos de servicio</h4><button type="button" id="botonCerrarModalInception" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="inceptionForm">
                        <div class="row">
                            <input type="hidden" id="inceptionIdTrabajador">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 offset-md-0" id="message">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Nombre del trabajador</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input disabled type="text" class="form-control" id="inceptionTrabajadorServ" name="name" required placeholder /></div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Monto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-money"></i></span><input type="text" disabled class="form-control" id="inceptionMontoServ" name="name" required placeholder /></div>
                                </div>
                                <hr class="d-flex d-md-none" />
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha del gasto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span><input type="text" disabled class="form-control" id="inceptionFechaServ" name="name" required placeholder /></div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Descripcion del gasto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span><input type="text" disabled class="form-control" id="inceptionDescServ" name="name" required placeholder /></div>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <!-- En este div va la tabla dinamica -->
                                    <div class="table-responsive" style="padding: 0px 20px 0px;">

                                        <table id="tablaInceptionServ" class="table table-striped table-bordered table-condensed" style="width:100%;">

                                            <thead class="text-center">
                                                <tr>
                                                    <th>Nombre del servicio</th>
                                                    <th>Precio unitario</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- Aquí acaba la tabla dinamica -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal  -->

    <div role="dialog" tabindex="-1" class="modal fade show" id="modalAgregarServicio">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Asignar gasto de servicio</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="añadirServicioForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 offset-md-0" id="message">
                                <hr class="d-flex d-md-none" />
                                <div class="form-group mb-3"><label class="form-label" for="from-phone">Servicio</label>
                                    <div class="input-group"><span class="input-group-text"><i class="material-icons">medical_services</i></span>
                                        <select class="form-select" id="ServNombre" name="call time">
                                            <!--Aquí poblamos el select -->
                                            <?php foreach ($data2 as $row) : ?>
                                                <!-- Le decimos que campo fue tomado desle la bd-->
                                                <option value="<?php echo $row["IDSERVICIO"] ?>"><?php echo $row["NOMBRESERVICIO"] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Monto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-money"></i></span><input type="text" class="form-control" id="montoServ" name="name" required placeholder /></div>
                                </div>
                                <button class="btn btn-primary d-block w-100" type="submit">Enviar<i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                            <div class="col-12 col-md-6" id="message-1">
                                <hr class="d-flex d-md-none" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>