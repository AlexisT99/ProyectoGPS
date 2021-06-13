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
        <h1>Viaticos</h1>
        <table id="tablaGenVia" class="table table-striped table-bordered table-condensed" style="width:100%;">
            <button id="btnNuevoViatico" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>Nombre del trabajador</th>
                    <th> </th>
                    <th>Fecha del viático</th>
                    <th>Monto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- Aquí se acaba la inserción de la tabla-->


<!--Modal para crudGenerarVia-->


<div class="modal fade" role="dialog" tabindex="-1" id="modalViaticos">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center;">
                <h4 style="text-align: center;">Generar viático</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="viaticosForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="successfail"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12 col-xl-12 offset-md-3 offset-lg-0 offset-xl-0" id="message">
                            <div class="form-group mb-3"><label class="form-label" for="from-phone">Nombre de trabajador</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span>
                                    <select class="form-select" id="viaticosNombre" name="call time">
                                        <?php foreach ($data as $row) : ?>
                                            <option value='<?php echo $row['IDTRABAJADOR'] ?>'> <?php echo $row['NOMBRETRAB'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha de asignación</label>
                                <div class="input-group"><span class="input-group-text"><i class="material-icons">date_range</i></span>
                                    <input class="form-control" id="fechaViaticos" name="name" placeholder type="date" />
                                </div>
                            </div><button class="btn btn-primary d-block w-100" type="submit" style="width: 600px;">Enviar<i class="fa fa-chevron-circle-right"></i></button>
                            <hr class="d-flex d-md-none" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- modal inception  -->

<div role="dialog" tabindex="-1" class="modal fade show" id="modalInception" data-backdrop="static">>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Visualizar informacion del viatico</h4><button type="button" id="botonCerrarModalInception" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="inceptionIdTrabajador">
                    <div class="col-md-6">
                        <div id="successfail"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 offset-md-0" id="message">
                        <div class="form-group mb-3"><label class="form-label" for="from-name">Nombre del trabajador</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input disabled type="text" class="form-control" id="inceptionTrabajador" name="name" required placeholder /></div>
                        </div>
                        <div class="form-group mb-3"><label class="form-label" for="from-name">Monto</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-money"></i></span><input type="text" disabled class="form-control" id="inceptionMonto" name="name" required placeholder /></div>
                        </div>
                        <hr class="d-flex d-md-none" />
                        <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha del viático</label>
                            <div class="input-group"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span><input type="text" disabled class="form-control" id="inceptionFecha" name="name" required placeholder /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <!-- En este div va la tabla dinamica -->
                            <div class="table-responsive" style="padding: 0px 20px 0px;">

                                <table id="tablaInception" class="table table-striped table-bordered table-condensed" style="width:100%;">

                                    <thead class="text-center">
                                        <tr>
                                            <th> </th>
                                            <th>Nombre del viático</th>
                                            <th>Monto</th>
                                            <th>Descripción</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
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
            </div>
        </div>
    </div>
</div>




<!-- modal inception -->

<div role="dialog" tabindex="-1" class="modal fade show" id="modalAsignarViatico">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Asignar viático</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="añadirViaticoForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="successfail"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12 offset-md-0" id="message">
                            <hr class="d-flex d-md-none" />
                            <div class="form-group mb-3"><label class="form-label" for="from-phone">Tipo de viatico</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon ion-fork"></i></span>
                                    <select class="form-select" id="tipoViaticosNombre" name="call time">
                                        <!--Aquí poblamos el select -->
                                        <?php foreach ($data2 as $row) : ?>
                                            <!-- Le decimos que campo fue tomado desle la bd-->
                                            <option value='<?php echo $row["IDTIVIATICO"]; ?>'> <?php echo $row["NOMBRE"]; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Monto</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-money"></i></span><input type="text" class="form-control" id="montoViatico" name="name" required placeholder /></div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Descripción</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-keyboard-o"></i></span><input type="text" class="form-control" id="descripcionViatico" name="name" required placeholder /></div>
                            </div><button class="btn btn-primary d-block w-100" type="submit">Enviar<i class="fa fa-chevron-circle-right"></i></button>
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

<div role="dialog" tabindex="-1" class="modal fade show" id="modalComprobarViaticos">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Comprobar viaticos</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="viaticosComprobacion">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="successfail"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12 offset-md-0" id="message">
                            <hr class="d-flex d-md-none" />
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Nombre del viatico</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-keyboard-o"></i></span><input type="text" class="form-control" disabled id="nombreViaticoComp" name="name" required placeholder /></div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Descripción</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-keyboard-o"></i></span><input type="text" class="form-control" disabled id="descripcionViaticoComp" name="name" required placeholder /></div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Monto a comprobar</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-money"></i></span><input type="text" class="form-control" id="montoViaticoComp" name="name" required placeholder /></div>
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