<div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1 style="color: rgb(255,255,255);">Módulo&nbsp;<small>Nómina</small></h1>
            </div>
        </div>
    </div>
</div>
<div>

    <!-- Aquí se inserta la tabla-->
    <div class="table-responsive" style="padding: 0px 20px 0px;">
        <h1>Solicitudes de gastos</h1>

        <table id="tablaSolGas" class="table table-striped table-bordered table-condensed" style="width:100%;">

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>Nombre Trabajador</th>
                    <th>Descripción</th>
                    <th>Monto</th>
                    <th>Fecha Gasto</th>
                    <th>Estado Gasto</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- Aquí se acaba la inserción de la tabla-->


    <!--Modal para CRUD-->

    <div class="modal fade" role="dialog" tabindex="-1" id="modalSolGas">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Modificar estado de solictud</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formSolGas">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6" id="message">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Nombre del trabajador</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input disabled type="text" class="form-control" id="nombreTrabSol" name="name" required placeholder /></div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Monto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" disabled type="text" id="montoSol" name="monto" required="" placeholder=""></div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha de gasto</label>
                                    <div class="form-group mb-3">
                                        <div class="input-group mb-4"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span><input class="form-control" type="text" disabled id="fechaSol"></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                            <div class="col-12 col-md-6" id="message-1">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Descripción</label>
                                    <div class="input-group"><span class="input-group-text" style="height: 124px;"><i class="fa fa-circle-o-notch"></i></span><textarea class="form-control" disabled id="descripcionSol"></textarea></div>
                                </div>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-dropbox"></i></span><select class="form-select" id="estadoSol" name="puesto">
                                        <!-- Le decimos que campo fue tomado desle la bd-->
                                        <option value="A">Aceptado</option>
                                        <option value="R">Rechazado</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary d-block w-100" type="submit" id="btnGuardarSol">Enviar<i class="fa fa-chevron-circle-right"></i></button></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>


</div>