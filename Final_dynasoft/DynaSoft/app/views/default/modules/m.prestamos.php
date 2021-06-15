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
        <h1>Prestamos</h1>

        <table id="tablaPrestamos" class="table table-striped table-bordered table-condensed" style="width:100%;">
            <button id="btnNuevoPres" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>IdTrabajador</th> <!-- IdTrabajador -->
                    <th>Nombre</th> <!-- Nombre -->
                    <th>Monto</th> <!-- Monto -->
                    <th>Restante</th> <!-- Restante -->
                    <th>Fecha Prestamo</th> <!-- Fecha Prestamo -->
                    <th>Estado Prestamo</th> <!-- Estado Prestamo -->
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- Aquí se acaba la inserción de la tabla-->


    <!--Modal para CRUD-->

    <div class="modal fade" role="dialog" tabindex="-1" id="modalCRUDPres">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Alta de prestamo</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formPrestamos">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6" id="message">
                                <div class="form-group mb-3"><label class="form-label" for="from-phone">Nombre Trabajador</label>

                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-dropbox"></i></span><select class="form-select" id="id_trab" name="id_trab">
                                            <!--Aquí poblamos el select -->
                                            <?php foreach ($data as $row): ?>
                                                <!-- Le decimos que campo fue tomado desle la bd-->
                                                <option value="<?php echo $row["IDTRABAJADOR"] ?>"><?php echo $row["NOMBRE_COMP"] ?></option>
                                            <?php endforeach ?>
                                        </select>


                                    </div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Monto</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" id="monto" name="monto" required="" placeholder=""></div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                            <div class="col-12 col-md-6" id="message-1">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Fecha de prestamo</label>
                                    <div class="form-group mb-3">
                                        <div class="input-group mb-4"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span><input class="form-control" type="date" id="fecha_prest"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary d-block w-100" type="submit" id="btnGuardar">Enviar<i class="fa fa-chevron-circle-right"></i></button></div>
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